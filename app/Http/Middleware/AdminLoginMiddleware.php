<?php

namespace App\Http\Middleware;

use Closure;

class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //检测是否具有登录用户名的session
        if($request->session()->has('username')){
            //获取访问模块的控制器和方法
            $actions=explode('\\', \Route::current()->getActionName());
            // //或$actions=explode('\\', \Route::currentRouteAction());
            $modelName=$actions[count($actions)-2]=='Controllers'?null:$actions[count($actions)-2];
            $func=explode('@', $actions[count($actions)-1]);

            $func1 = $func;
            $func1[0]=substr($func1[0],0,-10);
            session(['controller'=>$func1]);
            // //控制器名
            $controllerName=$func[0];
            // //方法
            $actionName=$func[1];
            //  // echo $controllerName.":".$actionName;
            // //4.权限对比
            // //获取登录用户的权限信息
            // $nodelist=session('nodelist');
            // // dd($nodelist);
            // if(empty($nodelist[$controllerName]) ||!in_array($actionName,$nodelist[$controllerName])){
            //     return redirect("/mes")->with('error','抱歉,您没有权限访问该模块,请联系狗东');
            // }
            //执行下一个请求
            return $next($request);
        }else{
            return redirect("/adminlogin/create");
        }
        
    }
}
