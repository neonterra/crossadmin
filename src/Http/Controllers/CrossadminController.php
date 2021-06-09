<?php

namespace Neonterra\Crossadmin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Neonterra\Crossadmin\Facades\Crossadmin;
use Neonterra\Crossadmin\Models\CrossadminModel;

/**
 * The CrossadminController class.
 *
 * @package neonterra/crossadmin
 * @author  neonterra <neonterras@gmail.com>
 */
class CrossadminController extends Controller
{
    public function demo()
    {
        return view('crossadmin::demo');
    }
}
