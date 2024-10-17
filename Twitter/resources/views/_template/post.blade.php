<div class="mt-3">

    <div class="card">
        <div class="px-3 pt-4 pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                         src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                    <div>
                        <h5 class="card-title mb-0"><a href="#"> {{$post['name']}}
                            </a></h5>
                    </div>
                </div>
                <div>
                    <form action="{{route('post.destroy', $post->id)}}" method="POST"  >
                        @csrf
                        @method('DELETE')
                        <button type="submit" >Dilit</button>
                    </form>

                </div>


            </div>
        </div>
        <div class="card-body">
            <p class="fs-6 fw-light text-muted">
                {{ $post->content  }}
            </p>
            <div class="d-flex justify-content-between">
                <div>
                    <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                                        </span> {{ $post->likes }}</a>
                </div>
                <div>
                                    <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                                        {{ $post->created_at  }}</span>
                </div>
            </div>
            <div>


                <hr>
                <div class="d-flex align-items-start">

                    <div class="w-100">
                        <div class="d-flex justify-content-between">

                            <div>
                                <h2>Comments</h2>

                                @foreach($post->comments as $comment)
                                    <p>{{ $comment->content }} - {{ $comment->created_at->diffForHumans() }}</p>
                                @endforeach

                                <form action="{{ route('comments.store', $post->id) }}" method="POST">
                                    @csrf
                                    <textarea name="content" required class="fs-6 form-control" rows="1" ></textarea>
                                    <button type="submit">Add Comment</button>
                                </form>
                            </div>
                            <small class="fs-6 fw-light text-muted"> 3 hour
                                ago</small>
                        </div>

                    </div>
                </div>
            </div>
            <div>
                <button onclick="showUpdateForm({{$post->id}})" >updejt</button>
            </div>
            <div id="updateForm-{{$post->id}}" style="display: none" >
                <form action="{{route('post.update', $post->id)}}" method="POST">
                    @csrf
                    @method("PUT")
                    <textarea name="content" class="form-control" rows="1">
                        {{$post->content}}
                    </textarea>
                    <button type="submit" >konfirm</button>
                </form>
            </div>

        </div>
    </div>

</div>

<script>
    function showUpdateForm(postId){
        document.getElementById('updateForm-' + postId) .style.display = 'block';
    }
</script>
