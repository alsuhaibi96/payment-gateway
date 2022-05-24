@extends('layout.admin_dashboard')

@section('users')
    active
@endsection
@section('header')
<span class="nav navbar-nav float-left">
    <b>
 عرض المستخدمين
    </b>
</span>
@endsection

@section('content')
 <!-- BEGIN: Content-->
 <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- users list start -->
            <section class="users-list-wrapper">
                <div class="users-list-filter px-1">
                    <form>
                        <div class="row border rounded py-2 mb-2">
                           
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-role">الصلاحيات</label>
                                <fieldset class="form-group">
                                    <select class="form-control" id="users-list-role">
                                        <option value="">Any</option>
                                        <option value="User">مستخدم</option>
                                        <option value="Staff">تاجر</option>
                                        <option value="Staff">admin</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <label for="users-list-status">الحالة</label>
                                <fieldset class="form-group">
                                    <select class="form-control" id="users-list-status">
                                        <option value="">Any</option>
                                        <option value="Active">النشطين</option>
                                        <option value="Close">Close</option>
                                        <option value="Banned">المحظورين</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                                <a href="{{ route('addUser') }}" class="btn btn-primary btn-block glow users-list-clear mb-0">إضافة مستخدم</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="users-list-table">
                    <div class="card">
                        <div class="card-body">
                            <!-- datatable start -->
                            <div class="table-responsive">
                                <table id="users-list-datatable" class="table">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>الاسم </th>
                                            <th>اللقب</th>
                                            <th>البريد الاكتروني</th>
                                            <th>تاريخ التسجيل</th>
                                            <th>الصلاحيات</th>
                                            <th>الحالة</th>
                                            <th>تعديل</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allUsers as $user) 
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->first_name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>
                                                <ul>
                                                    @foreach ($user->getRoles() as $role)
                                                    @if(count($user->getRoles())>1)
                                                        <span>{{ $role.' ,' }}</span>
                                                        @else
                                                        <span>{{ $role }}</span>
                                                  
                                                      @endif
                                                    @endforeach
                                                      
                                                    
                                                      
                                                    </ul>
                                            </td>
                                            <td>  @if($user->is_active==1)  
          
                                                <span class="badge bg-label-primary me-1">
                                                  مفعل
                                                </span>
                                                @else
                                               
                                                <span class="badge btn btn-danger me-1">
                                                  غير مفعل
                                                </span>
                                                @endif </td>
                                            
                                            <td><a href="{{ route('editUser') }}"><i class="bx bx-edit-alt"></i></a></td>
                                        </tr>
                                        @endforeach
                                      
                                       
                                    
                                    </tbody>
                                </table>
                            </div>
                            <!-- datatable ends -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- users list ends -->

        </div>
    </div>
</div>
<!-- END: Content-->


@endsection