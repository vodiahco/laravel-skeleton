 @if (Session::has('notice'))
        <div class="alert alert-info no-margin-bottom">{{ Session::get('notice') }}</div>
    @endif
 @if (Session::has('success'))
        <div class="alert alert-success no-margin-bottom">{{ Session::get('success') }}</div>
    @endif
  @if (Session::has('warning'))
        <div class="alert alert-danger no-margin-bottom">{{ Session::get('warning') }}</div>
    @endif