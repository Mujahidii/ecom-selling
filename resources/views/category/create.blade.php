@extends('layouts.app')
@section('content')
    <!-- bannerSec -->
    <div class="bannerSec bannerSecII">
        <div class="txtWrap">
            <h1 class="btn-info"><i class="fas fa-user-plus mdIcn faicon"></i> Create Category </h1>
        </div>
    </div>
    <div id="errrormasgbox_category" style="display: none;">
        <div class="memLabelTitle">We were unable to process your enrollment; <strong id="titleReason"
                                                                                      class="font-weight-semibold">Please
                complete the required fields below.</strong></div>
        <div id="error_message"></div>
        {{--        <span class="memLabelTitle" id="member_exist_same_group" style="display: none">Click <a--}}
        {{--                id="linkoldmember">here</a> to view/edit the account details associated with this email address: <span--}}
        {{--                id="email_show" class="font-weight-semibold"></span></span>--}}
        {{--        <span class="memLabelTitle" id="member_exist_other_group" style="display: none">This member belogs to group <strong--}}
        {{--                id="oldmembergroup">xyz</strong> </span>--}}
        {{--        <span class="memLabelTitle" id="email_wrong" style="display: none">If this was a mistake, please try again using a correct email address.</span></span>--}}
        {{--        <strong class="memLabelTitle add" style="display: none">Reason: <span id="responcarddec">We are unable to process right now.</span></strong>--}}
    </div>
    <div id="successmasgbox_category" style="display: none;">
        <strong class="memLabelTitle">You have successfully completed your enrollment.</strong>
        <strong class="memLabelTitle add">Success:
            <div id="success_message"></div>
        </strong>
    </div>
    <!-- anmSection -->
    <div class="anmSection">
        <form action="#" class="anmForm" method="POST" id="formValidation">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <div class="formBody">
                <div class="formInlineRow">
                    <div class="formCol">
                        <label>Category Title</label>
                        <div class="mdSelectWrapper">
                            <input type="text" name="category_title" id="category_title" required
                                   placeholder="Category Title"
                                   class="text-capitalize mdInput" {{old('category_title')}}>
                        </div>
                    </div>
                    <br>
                    <div class="formCol">
                        <label>Status</label>
                        <div class="mdSelectWrapper">
                            <select class="mdSelectWrapper" name="status" required id="status">
                                <option value="" selected>Select Status</option>
                                <option value="0" {{old('status') === 0 ? 'selected' : ''}}>Inactive</option>
                                <option value="1" {{old('status') === 1 ? 'selected' : ''}}>Active</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="formCol">
                        <label>Description</label>
                        <div class="mdSelectWrapper">
                            <textarea placeholder="Description" id="category_description" name="description"
                                      class="text-capitalize mdInput" cols="21" {{old('description')}}></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="formFooter">
                <!-- pagnitionFooter -->
                <div class="pagnitionFooter">
                    <div class="alignLeft">&nbsp;</div>
                    <div class="alignRight">
                        <a href="javascript:void(0)" class="btn btn-info" id="createNewCategory">Create Category</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('scripts')
    <script src="{{asset('js/jqueryNewCustom.js')}}"></script>
@endpush
