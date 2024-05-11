
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>New Article</h2>
                    </div>
                    <p>Please fill this form and submit to add sports record in the database.</p>
                    <form action="../exemplomvc/blog?act=add" method="post" >
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <input name="content" class="form-control" value="">
                        </div>
                        <input type="submit" name="addbtn" class="btn btn-primary" value="Submit">
                        <a href="../exemplomvc" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
