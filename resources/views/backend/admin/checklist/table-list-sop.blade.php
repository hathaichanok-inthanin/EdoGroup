@extends('backend/layouts/admin/template')
<style>
    .table> :not(caption)>*>* {
        padding: 0.3rem 1.25rem !important;
        font-size: small;
    }
</style>
@section('content')
    <center>
        <h3 class="mt-5">CHECKLIST SOP สำหรับผู้จัดการ รองผู้จัดการ</h3>
    </center>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <h5 class="card-header text-center">CHECKLIST SOP ช่วงเช้า 10:00 - 12:00 น. (สำหรับผู้จัดการ รองผู้จัดการ)
                </h5>
                <hr>
                @foreach ($titles as $title => $value)
                    @php
                        $checklists = DB::table('list_sops')
                            ->where('title_id', $value->title_id)
                            ->where('period', 'ช่วงเช้า 10.00-12.00')
                            ->where('position', 'ผู้จัดการ รองผู้จัดการ')
                            ->get();
                        $title = DB::table('title_sops')
                            ->where('id', $value->title_id)
                            ->value('title');
                    @endphp
                    @if (count($checklists) != 0)
                        <h6><strong>{{ $title }}</strong></h6>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>list</th>
                                    </tr>
                                </thead>
                                @foreach ($checklists as $checklist => $value)
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td>{{ $value->number }}</td>
                                            <td>{{ $value->list }}</td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div><br>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <h5 class="card-header text-center">CHECKLIST SOP ช่วงค่ำ 21:00 - 23:00 น. (สำหรับผู้จัดการ รองผู้จัดการ)
                </h5>
                <hr>
                @foreach ($titles as $title => $value)
                    @php
                        $checklists = DB::table('list_sops')
                            ->where('title_id', $value->title_id)
                            ->where('period', 'ช่วงค่ำ 21.00-23.00')
                            ->where('position', 'ผู้จัดการ รองผู้จัดการ')
                            ->get();
                        $title = DB::table('title_sops')
                            ->where('id', $value->title_id)
                            ->value('title');
                    @endphp
                    @if (count($checklists) != 0)
                        <h6><strong>{{ $title }}</strong></h6>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>list</th>
                                    </tr>
                                </thead>
                                @foreach ($checklists as $checklist => $value)
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td>{{ $value->number }}</td>
                                            <td>{{ $value->list }}</td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div><br>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <center>
        <h3 class="mt-5">CHECKLIST SOP สำหรับหัวหน้าเชฟ รองหัวหน้าเชฟ</h3>
    </center>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <h5 class="card-header text-center">CHECKLIST SOP ช่วงเช้า 10:00 - 12:00 น. (สำหรับหัวหน้าเชฟ รองหัวหน้าเชฟ)
                </h5>
                <hr>
                @foreach ($titles as $title => $value)
                    @php
                        $checklists = DB::table('list_sops')
                            ->where('title_id', $value->title_id)
                            ->where('period', 'ช่วงเช้า 10.00-12.00')
                            ->where('position', 'หัวหน้าเชฟ รองหัวหน้าเชฟ')
                            ->get();
                        $title = DB::table('title_sops')
                            ->where('id', $value->title_id)
                            ->value('title');
                    @endphp
                    @if (count($checklists) != 0)
                        <h6><strong>{{ $title }}</strong></h6>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>list</th>
                                    </tr>
                                </thead>
                                @foreach ($checklists as $checklist => $value)
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td>{{ $value->number }}</td>
                                            <td>{{ $value->list }}</td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div><br>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <h5 class="card-header text-center">CHECKLIST SOP ช่วงค่ำ 21:00 - 23:00 น. (สำหรับหัวหน้าเชฟ รองหัวหน้าเชฟ)
                </h5>
                <hr>
                @foreach ($titles as $title => $value)
                    @php
                        $checklists = DB::table('list_sops')
                            ->where('title_id', $value->title_id)
                            ->where('period', 'ช่วงค่ำ 21.00-23.00')
                            ->where('position', 'หัวหน้าเชฟ รองหัวหน้าเชฟ')
                            ->get();
                        $title = DB::table('title_sops')
                            ->where('id', $value->title_id)
                            ->value('title');
                    @endphp
                    @if (count($checklists) != 0)
                        <h6><strong>{{ $title }}</strong></h6>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>list</th>
                                    </tr>
                                </thead>
                                @foreach ($checklists as $checklist => $value)
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td>{{ $value->number }}</td>
                                            <td>{{ $value->list }}</td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div><br>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
