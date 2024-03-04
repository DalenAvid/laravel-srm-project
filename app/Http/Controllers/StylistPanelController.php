<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StylistPanelController extends Controller
{
    public function handleAppointment(Request $request)
    {
        // Используйте методы запроса для получения данных из формы
        $stylist = $request->input('stylist');
        $service = $request->input('service');
        $name = $request->input('name');
        $phone = $request->input('phone');
        $date = $request->input('date');
        $time = $request->input('time');
        $message = $request->input('message');

        // Теперь у вас есть доступ к данным из формы, и вы можете выполнить необходимую логику

        // Например, вы можете сохранить данные в базу данных, отправить уведомление или выполнить другие действия.

        // Здесь вы можете добавить логику для сохранения данных в базу данных или выполнения других действий.

        // Вернем, к примеру, ответ в виде JSON
        return response()->json(['success' => true, 'message' => 'Данные успешно получены и обработаны.']);
    }
    public function index()
    {
        return view('stylistpanel');
    }

}
