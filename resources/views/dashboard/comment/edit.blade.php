@extends('dashboard.comment.comments')
@section('comment')
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mt-5">Edit Products</h5>
                <hr>

                <form action="{{ route('comments.update', $comment->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="category_id" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="status" name="statusComment" value="{{ $comment->status }}"
                                required>
                                <option value="">Select a status</option>
                                <option value="Pending" {{ $comment->status === 'Pending' ? 'selected' : '' }}>Pending
                                </option>
                                <option value="Approved" {{ $comment->status === 'Approved ' ? 'selected' : '' }}>
                                    Approved
                                </option>
                                <option value="Rejected" {{ $comment->status === 'Rejected ' ? 'selected' : '' }}>
                                    Rejected</option>
                                <option value="Spam" {{ $comment->status === 'Spam  ' ? 'selected' : '' }}>
                                    Spam </option>
                            </select>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn  btn-primary">Edit</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>

    </div>
@endsection
