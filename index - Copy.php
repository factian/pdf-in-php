<html>  
<head>  
    <title>Ckeditor</title>  
    <script src="https://cdn.tiny.cloud/1/0uof1z319cvox1btqxzorp7yw469pxa8rfhlm4buwuwsb0dw/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    
</head>
<style>
 .box
 {
  width:100%;
  max-width:600px;
  background-color:#f9f9f9;
  border:1px solid #ccc;
  border-radius:5px;
  padding:16px;
  margin:0 auto;
 }
 .ck-editor__editable[role="textbox"] {
                /* editing area */
                min-height: 300px;
            }
 .error
{
  color:  red;
}
</style> 
  <?php 
  include('config.php');
  if(isset($_REQUEST['submit']))
  {
    $content = $_REQUEST['content'];
    $drId =  $_REQUEST['drId'];
    $insert_query = mysqli_query($con, "insert into template set message='$content',drId='$drId'");
    if($insert_query)
    {
      $msg = "Data Inserted";
    }
    else
    {
      $msg = "Error";
    }
  }
  ?>
<body>
<div class="container">
  <h3 align="center">CKEditor</h3>
  <br>
  <div class="box">
  <form id="post">
        <textarea id="editor">Hello, World!</textarea> 
   </form>
  <!-- <form method="post">
  <div class="form-group">
    Doctor Id:
  <input type="text" id="drId" name="drId" class="form-control" />
  </div>
  <div class="form-group">
    Template Text:
  <textarea id="content" name="content" class="form-control"></textarea>
  </div>
  <div class="form-group">
  <input type="submit" name="submit" value="Save" class="btn btn-primary">
  </div> -->
  <!-- </form> -->
  <div class="error"><?php if(!empty($msg)){ echo $msg; } ?></div>
  </div>
</div> 
 </body>  
</html>  
<script>
    tinymce.init({
      selector: '#editor',
    plugins: 'powerpaste casechange searchreplace autolink directionality visualblocks visualchars image link media mediaembed codesample table charmap pagebreak nonbreaking anchor tableofcontents insertdatetime advlist lists checklist wordcount tinymcespellchecker editimage help formatpainter permanentpen charmap linkchecker emoticons advtable export autosave',
    toolbar: 'undo redo print spellcheckdialog formatpainter | blocks fontfamily fontsize | bold italic underline forecolor backcolor | link image | alignleft aligncenter alignright alignjustify',
    height: '600px'
        });
 </script>
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
  
    ClassicEditor
        .create( document.querySelector( '#content' ))
        
        .catch( error => {
            console.error( error );
        });
     
</script> -->

