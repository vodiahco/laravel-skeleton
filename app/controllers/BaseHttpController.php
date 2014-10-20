<?php
namespace App\Controllers;

class BaseHttpController extends BaseController {

    const VIEW_DIR = "";
    const METHOD_POST = "post";
    const METHOD_GET = "get";
    const SEARCH = "s";
    const PAGE = "page";
    const PAGE_SIZE = 50;
    const PAGE_SIZE_NAME = "chunk";
    const PAGE_START = 1;
    const ERROR = "error";
    const INFO = "info";
    const WARNING = "warning";
    const SUCCESS = "success";
    const NO_POST = "no_post";
    const INVALID_REQUEST = "Invalid request";
    const ERROR_404 = "Page not found";
    const ERRPR_403 = "Invalid page request";
    const VALIDATION_ERROR = "not_valid";
    const HTTP_OK = "ok";

}
