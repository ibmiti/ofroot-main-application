<!DOCTYPE html>
<html>
<head>
    <title>File Upload Form</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Upload Files</h2>
        <form action="{{ route('process-health-data') }}"
        method="post" enctype="multipart/form-data">
            @csrf
            <!-- File Input for selecting files -->
            <div class="form-group">
                <label for="fileInput">Select files:</label>
                <input type="file" class="form-control-file" id="fileInput"
                name="files[]" multiple>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
