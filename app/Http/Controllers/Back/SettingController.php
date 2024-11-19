<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\SettingUpdateRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public $setting;

    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }

    public function index()
    {
        $setting = $this->setting->where('id',1)->firstOrCreate();
        return view('back.pages.setting.index',compact('setting'));
    }

    public function update(SettingUpdateRequest $request)
    {
        $setting = $this->setting->where('id',1)->firstOrCreate();
        $setting->update($request->post());

        return redirect()->back()->with('success', 'Ayarlar başarıyla güncellendi.');
    }
}
