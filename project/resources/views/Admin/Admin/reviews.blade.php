@extends('js')
@section('content')
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 评论管理 <span class="c-gray en">&gt;</span> 意见反馈 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c"> 日期范围：
		<input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}' })" id="datemin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d' })" id="datemax" class="input-text Wdate" style="width:120px;">
		<input type="text" class="input-text" style="width:250px" placeholder="输入关键词" id="" name="">
		<button type="submit" class="btn btn-success radius" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜意见</button>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> </span> <span class="r">共有数据：<strong>88</strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-hover table-bg table-sort">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="60">ID</th>
					<th width="60">用户名</th>
					<th>留言内容</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
				<tr class="text-c">
					<td><input type="checkbox" value="1" name=""></td>
					<td>1</td>
					<td><a href="javascript:;" onclick="member_show('张三','member-show.html','10001','360','400')"><i class="avatar size-L radius"><img alt="" src="static/h-ui/images/ucnter/avatar-default-S.gif"></i></a></td>
					<td class="text-l"><div class="c-999 f-12">
							<u style="cursor:pointer" class="text-primary" onclick="member_show('张三','member-show.html','10001','360','400')">张三</u> <time title="2014年8月31日 下午3:20" datetime="2014-08-31T03:54:20">2014-8-31 15:20</time> <span class="ml-20">13000000000</span> <span class="ml-20">admin@mail.com</span></div>
							<div class="f-12 c-999"><a href="http://www.h-ui.net/Hui-4.22-comment.shtml" target="_blank">http://www.h-ui.net/Hui-4.22-comment.shtml</a></div>
						<div>留言内容</div></td>
					<td class="td-manage"><a title="编辑" href="javascript:;" onclick="member_edit('编辑','member-add.html','4','','510')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="member_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<tr class="text-c">
					<td><input type="checkbox" value="1" name=""></td>
					<td>1</td>
					<td><a href="javascript:;" onclick="member_show('张三','member-show.html','10001','360','400')"><i class="avatar size-L radius"><img alt="" src="static/h-ui/images/ucnter/avatar-default-S.gif"></i></a></td>
					<td class="text-l"><div class="c-999 f-12">
							<u style="cursor:pointer" class="text-primary" onclick="member_show('张三','member-show.html','10001','360','400')">张三</u> <time title="2014年8月31日 下午3:20" datetime="2014-08-31T03:54:20">2014-8-31 15:20</time> <span class="ml-20">13000000000</span> <span class="ml-20">admin@mail.com</span></div>
							<div class="f-12 c-999"><a href="http://www.h-ui.net/Hui-4.22-comment.shtml" target="_blank">http://www.h-ui.net/Hui-4.22-comment.shtml</a></div>
						<div>留言内容</div></td>
					<td class="td-manage"><a title="编辑" href="javascript:;" onclick="member_edit('编辑','member-add.html','4','','510')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="member_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<tr class="text-c">
					<td><input type="checkbox" value="1" name=""></td>
					<td>1</td>
					<td><a href="javascript:;" onclick="member_show('张三','member-show.html','10001','360','400')"><i class="avatar size-L radius"><img alt="" src="static/h-ui/images/ucnter/avatar-default-S.gif"></i></a></td>
					<td class="text-l"><div class="c-999 f-12">
							<u style="cursor:pointer" class="text-primary" onclick="member_show('张三','member-show.html','10001','360','400')">张三</u> <time title="2014年8月31日 下午3:20" datetime="2014-08-31T03:54:20">2014-8-31 15:20</time> <span class="ml-20">13000000000</span> <span class="ml-20">admin@mail.com</span></div>
							<div class="f-12 c-999"><a href="http://www.h-ui.net/Hui-4.22-comment.shtml" target="_blank">http://www.h-ui.net/Hui-4.22-comment.shtml</a></div>
						<div>留言内容</div></td>
					<td class="td-manage"><a title="编辑" href="javascript:;" onclick="member_edit('编辑','member-add.html','4','','510')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="member_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				<tr class="text-c">
					<td><input type="checkbox" value="1" name=""></td>
					<td>1</td>
					<td><a href="javascript:;" onclick="member_show('张三','member-show.html','10001','360','400')"><i class="avatar size-L radius"><img alt="" src="static/h-ui/images/ucnter/avatar-default-S.gif"></i></a></td>
					<td class="text-l"><div class="c-999 f-12">
							<u style="cursor:pointer" class="text-primary" onclick="member_show('张三','member-show.html','10001','360','400')">张三</u> <time title="2014年8月31日 下午3:20" datetime="2014-08-31T03:54:20">2014-8-31 15:20</time> <span class="ml-20">13000000000</span> <span class="ml-20">admin@mail.com</span></div>
							<div class="f-12 c-999"><a href="http://www.h-ui.net/Hui-4.22-comment.shtml" target="_blank">http://www.h-ui.net/Hui-4.22-comment.shtml</a></div>
						<div>留言内容</div></td>
					<td class="td-manage"><a title="编辑" href="javascript:;" onclick="member_edit('编辑','member-add.html','4','','510')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="member_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection
@section('title','用户评论')