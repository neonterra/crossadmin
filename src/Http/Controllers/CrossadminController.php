<?php

namespace Webjhin\Crossadmin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Webjhin\Crossadmin\Facades\Crossadmin;
use Webjhin\Crossadmin\Models\CrossadminModel;

/**
 * The CrossadminController class.
 *
 * @package webjhin/crossadmin
 * @author  neonterra <neonterras@gmail.com>
 */
class CrossadminController extends Controller
{
    public function demo()
    {
        return view('crossadmin::demo');
    }
}
