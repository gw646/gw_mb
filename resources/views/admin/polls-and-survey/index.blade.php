@extends('admin.layouts.app')

@section('title', 'Create Poll')

@section('content')
<div class="row">
    <div class="col-12">
        <form action="{{ route('polls.store') }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create a New Poll</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Questions:</label>
                        <div id="questionWrapper">
                            <div class="input-group mb-3">
                                <input type="text" name="questions[]" class="form-control" placeholder="Question" required>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary remove-question" type="button">&times;</button>
                                </div>
                            </div>
                        </div>
                        <button type="button" id="addQuestion" class="btn btn-info">Add Question</button>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const questionWrapper = document.getElementById('questionWrapper');
    document.getElementById('addQuestion').onclick = function() {
        const newQuestion = document.createElement('div');
        newQuestion.className = 'input-group mb-3';
        newQuestion.innerHTML = `
            <input type="text" name="questions[]" class="form-control" placeholder="Question" required>
            <div class="input-group-append">
                <button class="btn btn-outline-secondary remove-question" type="button">&times;</button>
            </div>`;
        questionWrapper.appendChild(newQuestion);
    };

    questionWrapper.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-question')) {
            e.target.closest('.input-group').remove();
        }
    });
});
</script>
@endsection
