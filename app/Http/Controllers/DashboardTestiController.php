<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ratingStar;
use Illuminate\Support\Facades\DB;

class DashboardTestiController extends Controller
{
    public function index()
    {
        $this->authorize('admin');
        return view('admin.testi.index', [
            'ratingStar' => ratingStar::latest()->get()
        ]);
    }

    public function delete($id)
    {
        ratingStar::destroy($id);
        // DB::table('ratingStar')->where('id', $id)->delete();
        return redirect('/admin/testi')->with('success', 'rating has been delete');
    }

}
