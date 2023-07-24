<!-- Edit User Modal -->
<div class="modal fade" id="editCat{{$category->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">Edit User Information</h3>
                    <p class="text-muted">Updating user details will receive a privacy audit.</p>
                </div>
                <form id="editCategory{{$category->id}}" class="row" method="POST" action="{{route('edit category',['id'=>$category->id])}}">
                    @csrf
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6 col-md-6">
                                <label class="form-label" for="categoryTitle">Title</label>
                                <input type="text" id="categoryTitle" name="cat_title" class="form-control" placeholder="Title" value="{{$category->title}}"/>
                            </div>
                            <div class="col-6 col-md-6 mb-4">
                                <label class="form-label" for="categoryTitleAr">Arabic Title</label>
                                <input type="text" id="categoryTitleAr" name="cat_title_ar" class="form-control" placeholder="Arabic Title" value="{{$category->title_ar}}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Edit User Modal -->
