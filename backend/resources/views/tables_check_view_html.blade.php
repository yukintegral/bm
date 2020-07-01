
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tables</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/4.0/examples/dashboard/dashboard.css" rel="stylesheet">
</head>

<body>
<h1>Tables</h1>
    <div class="container-fluid">
        <div class="row">
            
                


                <!-- table[Start] --><div class="col-md-3"><h2 class="info">users</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>string('user_name');
</td><td></td></tr><tr><td>3</td><td>string('lid');
</td><td></td></tr><tr><td>4</td><td>string('lpw');
</td><td></td></tr><tr><td>5</td><td>string('email');
</td><td></td></tr><tr><td>6</td><td>string('class')->nullable();
</td><td></td></tr><tr><td>7</td><td>text('avatar')->nullable();
</td><td></td></tr><tr><td>8</td><td>text('self_introducion')->nullable();
</td><td></td></tr><tr><td>9</td><td>text('sns1')->nullable();
</td><td></td></tr><tr><td>10</td><td>text('sns2')->nullable();
</td><td></td></tr><tr><td>11</td><td>text('sns3')->nullable();
</td><td></td></tr><tr><td>12</td><td>integer('kanri_flg');
</td><td></td></tr><tr><td>13</td><td>timestamps();
</td><td></td></tr><tr><td>14</td><td>softDeletes();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">introductions</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>string('user_id');
</td><td></td></tr><tr><td>3</td><td>text('content');
</td><td></td></tr><tr><td>4</td><td>timestamps();
</td><td></td></tr><tr><td>5</td><td>softDeletes();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">plant_red</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>integer('user_id');
</td><td></td></tr><tr><td>2</td><td>integer('plant_red_status')->nullable();
</td><td></td></tr><tr><td>3</td><td>timestamps();
</td><td></td></tr><tr><td>4</td><td>softDeletes();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">plant_blue</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>integer('user_id');
</td><td></td></tr><tr><td>2</td><td>integer('plant_blue');
</td><td></td></tr><tr><td>3</td><td>timestamps();
</td><td></td></tr><tr><td>4</td><td>softDeletes();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">plant_yellow</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>integer('user_id');
</td><td></td></tr><tr><td>2</td><td>integer('plant_yellow');
</td><td></td></tr><tr><td>3</td><td>timestamps();
</td><td></td></tr><tr><td>4</td><td>softDeletes();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">plant_white</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>integer('user_id');
</td><td></td></tr><tr><td>2</td><td>integer('plant_white');
</td><td></td></tr><tr><td>3</td><td>timestamps();
</td><td></td></tr><tr><td>4</td><td>softDeletes();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">plant_pink</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>integer('user_id');
</td><td></td></tr><tr><td>2</td><td>integer('plant_pink');
</td><td></td></tr><tr><td>3</td><td>timestamps();
</td><td></td></tr><tr><td>4</td><td>softDeletes();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">user_likes</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>integer('liking_user_id');
</td><td></td></tr><tr><td>3</td><td>integer('liked_user_id');
</td><td></td></tr><tr><td>4</td><td>timestamps();
</td><td></td></tr><tr><td>5</td><td>softDeletes();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">posts</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>integer('user_id')->nullable();
</td><td></td></tr><tr><td>3</td><td>text('content');
</td><td></td></tr><tr><td>4</td><td>integer('category_id');
</td><td></td></tr><tr><td>5</td><td>string('post_name');
</td><td></td></tr><tr><td>6</td><td>integer('price')->nullable();
</td><td></td></tr><tr><td>7</td><td>integer('post_status_id');
</td><td></td></tr><tr><td>8</td><td>timestamps();
</td><td></td></tr><tr><td>9</td><td>softDeletes();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">post_messages</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>text('post_message');
</td><td></td></tr><tr><td>3</td><td>integer('post_id');
</td><td></td></tr><tr><td>4</td><td>integer('user_id');
</td><td></td></tr><tr><td>5</td><td>text('file');
</td><td></td></tr><tr><td>6</td><td>timestamps();
</td><td></td></tr><tr><td>7</td><td>softDeletes();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">post_files</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>string('post_id');
</td><td></td></tr><tr><td>3</td><td>integer('file');
</td><td></td></tr><tr><td>4</td><td>dateTime('update_at');
</td><td></td></tr><tr><td>5</td><td>timestamps();
</td><td></td></tr><tr><td>6</td><td>softDeletes();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">categories</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>string('category_name');
</td><td></td></tr><tr><td>3</td><td>dateTime('update_at');
</td><td></td></tr><tr><td>4</td><td>timestamps();
</td><td></td></tr><tr><td>5</td><td>softDeletes();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">post_likes</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>integer('user_id');
</td><td></td></tr><tr><td>3</td><td>integer('post_id');
</td><td></td></tr><tr><td>4</td><td>timestamps();
</td><td></td></tr><tr><td>5</td><td>softDeletes();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">post_statuses</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>string('posts_status');
</td><td></td></tr><tr><td>3</td><td>timestamps();
</td><td></td></tr><tr><td>4</td><td>softDeletes();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">transactions</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>integer('post_id');
</td><td></td></tr><tr><td>3</td><td>integer('user_id');
</td><td></td></tr><tr><td>4</td><td>timestamps();
</td><td></td></tr><tr><td>5</td><td>softDeletes();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">transaction_messages</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>string('transaction_message');
</td><td></td></tr><tr><td>3</td><td>integer('transaction_id');
</td><td></td></tr><tr><td>4</td><td>integer('sender_id');
</td><td></td></tr><tr><td>5</td><td>integer('receiver_id');
</td><td></td></tr><tr><td>6</td><td>timestamps();
</td><td></td></tr><tr><td>7</td><td>softDeletes();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --><div class="col-md-3"><h2 class="info">information</h2><h5>[ ]</h5><div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr class="bg-primary text-white">
                                <th>-</th>
                                <th>Name(Type Size)</th>
                                <th>Comment</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- TR --><tr><td>1</td><td>increments('id');
</td><td></td></tr><tr><td>2</td><td>string('content');
</td><td></td></tr><tr><td>3</td><td>timestamps();
</td><td></td></tr><tr><td>4</td><td>softDeletes();
</td><td></td></tr><!-- TR -->
                            </tbody>

                        </table>
                    </div>
                     </div>
                    <!-- table[end] --> </main>
        </div>
    </div>
</body>

</html>
