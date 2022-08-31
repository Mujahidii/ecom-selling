<div class="modal fade" id="category_edit_{{$category_id}}"
     tabindex="-1" role="dialog" aria-labelledby="applicantModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div style="margin-left: 5px;">
                <div class="anmSection">
                    <form action="{{route('category.edit', $category->id)}}" class="anmForm" method="POST" id="formValidation">
                        @csrf
                        {!! method_field('PUT') !!}
                        <div class="formBody">
                            <div class="formInlineRow">
                                <div class="formCol">
                                    <label>Category Title</label>
                                    <div class="mdSelectWrapper">
                                        <input type="text" value="{{$category->name}}" name="category_title"
                                               id="category_title" required placeholder="Category Title"
                                               class="text-capitalize mdInput">
                                    </div>
                                </div>
                                <br>
                                <div class="formCol">
                                    <label>Status</label>
                                    <div class="mdSelectWrapper">
                                        <select class="mdSelectWrapper" name="status" id="status">
                                            <option @if($category->status == 0) selected @endif value="0">Inactive
                                            </option>
                                            <option @if($category->status == 1) selected @endif
                                            value="1">Active
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="formCol">
                                    <label>Description</label>
                                    <div class="mdSelectWrapper">
                            <textarea placeholder="Description" id="category_description" name="description"
                                      class="text-capitalize mdInput" cols="21">{{$category->description}}
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
                                    <button type="submit" class="btn btn-info"><a href="{{route('category.list')}}"
                                                                                  style="text-decoration: none">Go
                                            Back</a></button>
                                    <button type="submit" class="btn btn-success">Update
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
