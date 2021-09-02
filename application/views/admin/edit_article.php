<?php include_once('admin_header.php'); ?>

<div class="container">
    <?php echo form_open("admin/update_article/{$article->id}", ['class' => 'form-horizontal']); ?>
    <!-- <?php echo form_hidden('article_id', $article->id); ?> -->
    <fieldset>
        <legend>Edit Articles</legend>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Article Title</label>
                    <?php echo form_input([
                        'name' => 'title', 'class' => 'form-control', 'placeholder' => 'Article Title',
                        'value' => set_value('title', $article->title)
                    ]); ?>
                </div>
            </div>
            <div>
                <?php echo form_error('title'); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4">Article Body</label>
                    <?php echo form_textarea([
                        'name' => 'body', 'class' => 'form-control', 'placeholder' => 'Article Body',
                        'value' => set_value('body', $article->body)
                    ]); ?>

                </div>
            </div>
            <div><?php echo form_error('body'); ?>
            </div>
        </div>
        <br>
        <?= anchor("admin/dashboard", 'Cancel', ['class' => 'btn btn-primary']); ?>
        <!-- <?php echo form_reset(['name' => 'reset', 'value' => 'Cancel', 'class' => 'btn btn-primary']); ?> -->
        <?php echo form_submit(['name' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-primary']); ?>

    </fieldset>

    </form>

</div>

<?php include_once('admin_footer.php'); ?>