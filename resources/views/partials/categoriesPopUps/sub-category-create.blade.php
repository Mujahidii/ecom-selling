<div class="modal fade" id="sub_category_create_{{$category_id}}"
     tabindex="-1" role="dialog" aria-labelledby="applicantModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div style="margin-left: 5px;">
                <div class="anmSection">
                    <form action="{{route('category.store')}}" class="anmForm" method="POST" id="formValidation">
                        @csrf
                        <input type="hidden" value="{{$category_id}}" name="parent_id">
                        <div class="formBody">
                            <div class="formInlineRow">
                                <div class="formCol">
                                    <label>Category Title</label>
                                    <div class="mdSelectWrapper">
                                        <input type="text" value="{{old('category_title')}}" name="category_title"
                                               id="category_title" required placeholder="Category Title"
                                               class="text-capitalize mdInput">
                                    </div>
                                </div>
                                <br>
                                <div class="formCol">
                                    <label>Status</label>
                                    <div class="mdSelectWrapper">
                                        <select class="mdSelectWrapper" name="status" id="status">
                                            <option value="">Select Category</option>
                                            <option value="0">Inactive</option>
                                            <option value="1">Active</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="formCol">
                                    <label>Description</label>
                                    <div class="mdSelectWrapper">
                                        <textarea placeholder="Description" id="category_description" name="description"
                                                  class="text-capitalize mdInput" cols="21">
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="formFooter">
                            <!-- pagnitionFooter -->
                            <div class="pagnitionFooter">
                                <div class="alignLeft">&nbsp;</div>
                                <div class="alignRight">
                                    <a href="javascript:void(0);" style="text-decoration: none">
                                        <span class="fa fa-close btn btn-primary" data-dismiss="modal"></span>
                                    </a>
                                    <button type="submit" class="btn btn-success">
                                        <span>Create</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
