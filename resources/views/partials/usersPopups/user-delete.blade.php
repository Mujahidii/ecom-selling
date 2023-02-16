<div class="modal fade" id="user_delete_{{$user->id}}"
     tabindex="-1" role="dialog" aria-labelledby="applicantModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div>
                <h2 class="margin-bottom-1 btn-danger">Remove User</h2>
                <p>Are you sure you want to delete this Record?</p>
                <div>
                    <button class="btn btn-success"> <a href="{{route('user.list')}}" style="text-decoration: none">Cancel</a></button>
                    <form action="{{route('user.destroy', $user->id)}}" method="POST" class="float-left">
                        @csrf
                        @method('Delete')
                        <button type="submit" title="delete"  class="btn btn-info">
                            Confirm
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
