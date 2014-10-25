<?php
namespace App\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Config;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;
use App\Models\Photo;
use Illuminate\Support\Facades\Event;
use App\Events\Events;


/**
 * Description of AlbumController
 *
 * @author victor
 */
class AlbumManagerController extends \App\Controllers\BaseHttpController
{
    public function getProfilePhoto()
    {
        return View::make('album-manager.photo-form');
    }
    
    public function postProfilePhoto()
    {
        if (Input::hasFile('photo') && Input::file('photo')->isValid()) {
                $file = Input::file('photo');
                $fileExtension = $file->getClientOriginalExtension();
                $fileSize = $file->getSize() / (1000 * 1000);
                $filePath = $file->getPathname();
                $imageConfig = Config::get('image');
                $sizes = $imageConfig['sizes'];
                $imageQuality = $imageConfig['quality'];
                $minWidth = $imageConfig['minWidth'];
                $maxSize = $imageConfig['maxSize'];
                $allowedTypes = $imageConfig['allowedTypes'];
                
            if ($fileSize > $maxSize) {
                return Redirect::back()
                    ->withErrors("File size is too large");
            }
                
                $img = Image::make($filePath);
                $imgWidth = $img->width();
                
            if ($imgWidth < $minWidth) {
                return Redirect::back()
                    ->withErrors("Image width is too small");
            }
                
            if (!in_array($fileExtension, $allowedTypes)) {
                return Redirect::back()
                    ->withErrors("Wrong file type");
            }
                
                $img->backup();
                $name = time().".".$fileExtension;
                $this->saveToDb($name);
                
                foreach ($sizes as $platform => $size) {
                    $img->resize($size, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });
                    $img->save(public_path().'/uploads/'.$platform."/".$name, $imageQuality);
                    $img->reset();
                }
                
                
            }
    }

    public function saveToDb($name)
    {
        $photo = new Photo;
        $photo->photo = $name;
        Event::fire(Events::NEW_PHOTO, array($photo));
        $photo->save();
    }

}
