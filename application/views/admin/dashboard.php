<?php include('admin_header.php'); ?>

<div class="container mt-1" style="width: 50%;">

    <div class="d-flex justify-content-end">
        <div>
            <?= anchor('admin/add_article', 'Add Articles', ['class' => 'btn btn-info']) ?></a>
            <!-- <a href="" class="btn btn-info">Add Articles</a> -->
        </div>
    </div>
    <?php if ($this->session->flashdata('feedback')) :
        $feedback_class = $this->session->flashdata('feedback_class');
    ?>
    <div class="col-lg-6">
        <div class="alert alert-dismissible <?= $feedback_class ?>">
            <?= $this->session->flashdata('feedback') ?>
        </div>
    </div>
    <?php endif; ?>
    <table class="table mt-2">
        <thead>
            <th>Sr.No.</th>
            <th>Title</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php if (!is_null($articles)) :
                // <!-- used count instance of !is_null -->
                $count = $this->uri->segment(3, 0);
                foreach ($articles as $article) : ?>
            <tr>
                <td><?= ++$count ?></td>
                <td> <?= $article->title ?></td>
                <td>
                    <div class="row">
                        <div class="col-lg-3">
                            <?= anchor("admin/edit_article/{$article->id}", 'Edit', ['class' => 'btn btn-success']); ?>
                        </div>
                        <div class="col-lg-3"><?=
                                                        form_open('admin/delete_article'),
                                                        form_hidden('article_id', $article->id),
                                                        form_submit([
                                                            'name' => 'submit', 'value' => 'Delete',
                                                            'class' => 'btn btn-danger'
                                                        ]),
                                                        form_close();
                                                        ?>
                        </div>
                    </div>


                    <!-- <a href="" class="btn btn-success">Edit</a> -->

                    <!-- <a href="" class="btn btn-danger">Delete</a> -->
                </td>
            </tr>
            <?php endforeach; ?>
            <?php else : ?>
            <tr>
                <td colspan="3">No Records Found</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <!-- <ul class="pagination">
        <li class="page-item disabled">
            <a class="page-link" href="#">&laquo;</a>
        </li>
        <li class="page-item active">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">4</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">5</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">&raquo;</a>
        </li>
    </ul> -->
    <?= $this->pagination->create_links(); ?>
</div>
</div>
<?php include('admin_footer.php'); ?>


<!-- $srno = 0;
                foreach ($articles as $article) :
                    $srno++;
                    echo '<tr>
                        <td>' . $srno . '</td>
                        <td>' . $article->title . '</td>
                        <td>
                         <a href="" class="btn btn-success">Edit</a>
                         <a href="" class="btn btn-danger">Delete</a>
                        </td>
                        </tr>';
                endforeach;  -->