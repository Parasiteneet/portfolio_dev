@extends('layouts.app')

@section('content')
<div class="card-header">
		<a href="{{ url('admin/user_list') }}">User List</a> &gt; User Detail
</div>
<div class="user_delete_form">
		<form method="POST" action="{{ route('user_delete') }}">
		@csrf
				<div class="form-groupe">
						<ul class="list-group">
								<li class="list-group-item">名前: {{ $user->name }}</li>
								<li class="list-group-item">メールアドレス: {{ $user->email }}</li>
								<li class="list-group-item">作成日: {{ $user->created_at->format('Y/m/d H:i:s') }}</li>
								<li class="list-group-item">更新日: {{ $user->updated_at->format('Y/m/d H:i:s') }}</li>
						</ul> 
						<input type="hidden" name="delete" value="{{ $user->id }}">
						<button type="submit" class="btn btn-secondary mt-4">このユーザを削除</button>
				</div>
		</form>	
</div>
@endsection