
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Edit Article</h2>
                    </div>
                    <p>Please fill this form and submit to add sports record in the database.</p>
                    <form action="../exemplomvc/blog?act=edit" method="post" >
                        <input type="text" name="id" class="form-control" value="<?php echo $this->Data[0]['id'] ?>">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $this->Data[0]['title'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <input name="content" class="form-control" value="<?php echo $this->Data[0]['content'] ?>">
                        </div>
                        <input type="submit" name="editbtn" class="btn btn-success" value="Submit">
                        <a href="../exemplomvc" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
