<!-- Edit User Modal -->
<div class="modal fade" id="editWork{{$work->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">Edit User Information</h3>
                    <p class="text-muted">Updating user details will receive a privacy audit.</p>
                </div>
                <form id="editCategory{{$work->id}}" class="row" method="POST" action="{{route('edit work',['id'=>$work->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{$work->title}}"/>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="title_ar">Title Arabic</label>
                                    <input type="text" class="form-control" name="title_ar" id="title_ar"
                                           placeholder="Title Arabic" value="{{$work->title_ar}}"/>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="title_ar">Category</label>
                                    <select class="form-select" id="exampleFormControlSelect1" aria-label="Select A category">
                                        @foreach($categories as $category)
                                            <option @if($category->id == $work->category->id) selected @endif value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="TagifyBasic" class="form-label">SEO Keywords</label>
                                <input id="TagifyBasic" class="form-control" name="seoKey" value="{{$work->seo_keyword}}"/>
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label" for="ser_desc">Seo Description</label>
                                <input type="text" class="form-control" name="seo_desc" id="ser_desc"
                                       placeholder="Seo Description" value="{{$work->seo_description}}"/>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="TagifyBasic" class="form-label">Type</label>
                                <input id="TagifyBasic" class="form-control" name="type" value="{{$work->type}}" />
                            </div>
                            <div class="col-6 mb-3">
                                <label for="TagifyBasic" class="form-label">Tech</label>
                                <input id="TagifyBasic" class="form-control" name="tech" value="{{$work->tech}}" />
                            </div>
                            <div class="col-6 mb-3">
                                <label for="flatpickr-date" class="form-label">Date Picker</label>
                                <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="flatpickr-date" name="date" value="{{$work->date}}" />
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="url">Url</label>
                                    <input type="text" class="form-control" name="url" id="url"
                                           placeholder="Link" value="{{$work->url}}"/>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label" for="thumb">Thumbnail (if not changing leave it empty)</label>
                                <input type="file" class="form-control" name="thumb" id="thumb"
                                       placeholder=""/>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-message">Content</label>
                                    <textarea id="basic-default-message" name="content" class="form-control" placeholder="Type something">{{$work->content}}</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-message">Content Arabic</label>
                                    <textarea id="basic-default-message" name="content_ar" class="form-control" placeholder="Type something" >{{$work->content_ar}}</textarea>
                                </div>
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
