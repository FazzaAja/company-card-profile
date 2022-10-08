<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 CRUD Application - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container">
    @yield('content')
</div>
    
</body>
<script>
// imgInp.onchange = evt => {
//   const [file] = imgInp.files
//   if (file) {
//     prview.style.visibility = 'visible';

//     prview.src = URL.createObjectURL(file)
//   }
// }

function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
}
</script>
</html>

