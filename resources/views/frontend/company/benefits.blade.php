@extends('frontend/layouts/employee/template')
<style>
    .ml-3 {
        margin-left: 3rem;
    }

    .rules h3 {
        text-align: center;
    }
</style>
@section('content')
    @php
        $branch = DB::table('branch_groups')
            ->where('id', auth::guard('staff')->user()->branch_id)
            ->value('branch');
    @endphp
    @if ($branch == 'LITTLE EDO สาขาสุราษฎร์ธานี')
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="rules">
                                        <h3>ผลประโยชน์เพิ่มเติม LITTLE EDO สาขาสุราษฎร์ธานี</h3>
                                        <hr>
                                        <iframe
                                            src="https://drive.google.com/file/d/1qFnkqrbbJMurF4Q0OoPs1dbnrTBQN3UW/preview"
                                            width="100%" height="800px" style="border:0;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif ($branch == 'LITTLE EDO สาขาภูเก็ต')
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="rules">
                                        <h3>ผลประโยชน์เพิ่มเติม LITTLE EDO สาขาภูเก็ต</h3>
                                        <hr>
                                        <iframe
                                            src="https://drive.google.com/file/d/1P-JpU1w88aEESwe-kk_vWYWq-BlL3xlc/preview"
                                            width="100%" height="800px" style="border:0;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif ($branch == 'EDO REMEN สาขาโลตัสสามกอง')
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="rules">
                                        <h3>ผลประโยชน์เพิ่มเติม EDO REMEN สาขาโลตัสสามกอง</h3>
                                        <hr>
                                        <iframe
                                            src="https://drive.google.com/file/d/1mAoIdi4stHPZN1PsrPmOW-TRu-oo_qIZ/preview"
                                            width="100%" height="800px" style="border:0;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif ($branch == 'EDO YAKINIKU สาขาภูเก็ต')
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="rules">
                                        <h3>ผลประโยชน์เพิ่มเติม EDO YAKINIKU สาขาภูเก็ต</h3>
                                        <hr>
                                        <iframe
                                            src="https://drive.google.com/file/d/125qO6z9omrAMRAf_BRHKOwCqQNI-oMaV/preview"
                                            width="100%" height="800px" style="border:0;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif ($branch == 'BIGBOSS สาขาภูเก็ต')
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="rules">
                                        <h3>ผลประโยชน์เพิ่มเติม BIGBOSS สาขาภูเก็ต</h3>
                                        <hr>
                                        <iframe
                                            src="https://drive.google.com/file/d/1xpNzlhde8JgXUzRiyoo3JRkm9R-ffAUl/preview"
                                            width="100%" height="800px" style="border:0;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
    @endif
@endsection
