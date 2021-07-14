<?php
namespace App\Http\Controllers;

use App;
use Carbon\Carbon;

class LanguageController extends Controller
{
    public function switch($language)
    {
        App::setLocale($language);
        session()->put('locale', $language);

        if ($language == 'en')
            $lang_selection = 'EN';
        else
            $lang_selection = 'BM';

        return redirect()->back()->with('success', __("Language changed to") . " ". strtoupper($lang_selection));
    }
}
