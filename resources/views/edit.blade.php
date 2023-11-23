<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit | {{ $post->id }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>
<body>
    <div class="container p-4">
        <div class="row justify-content-md-center">
            <div class="col-md12">
                <div class="text-center">
                    <h2>Store Data with SummerNote</h2>
                </div>
                <form action="/update/{{ $post->id }}" method="post">
                    @csrf
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value={{ $post->title }}>
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10">{{ $post->description }}</textarea>
                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $('#description').summernote({
            tabsize: 2,
            height: 300,
        })
    </script>
</body>
</html>