<?php

namespace App\Http\Controllers;

use App\Todo;
use App\User;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;

/**
 * Class TodoController
 * @package App\Http\Controllers
 */
class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('todo');
    }

    /**
     * 全件表示
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function get()
    {
        /** @var User $user */
        $user = Auth::user();
        return response()->json($user->todos()->get());
    }

    /**
     * 1件追加
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function post(Request $request)
    {
        $todo = new Todo();
        $todo->todo = $request->input('todo');
        $todo->user_id = Auth::id();
        $todo->save();
        return response("OK", 200);
    }

    /**
     * 1件削除
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * @throws \Exception
     */
    public function delete($id)
    {
        Todo::find($id)->delete();
        return response("OK", 200);
    }

    /**
     * 1件更新
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /** @var Todo $todo */
        $todo = Todo::find($id);
        $todo->todo = $request->input('todo');
        $todo->save();
        return response("OK", 200);
    }

}
