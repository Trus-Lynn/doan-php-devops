<!--end breadcrumb-->

<div class="card">
    <div class="card-header py-3">
        <div class="row align-items-center m-0">
            <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                <select class="form-select">
                </select>
            </div>
            <div class="col-md-2 col-6">
                <input type="date" class="form-control">
            </div>
            <!-- <div class="col-md-2 col-6">
                <select class="form-select">
                    <option>Status</option>
                    <option>Active</option>
                    <option>Disabled</option>
                    <option>Show all</option>
                </select>
            </div> -->
        </div>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <?php
// if(isset($thongbao)&&($thongbao!="")){
//     echo '<div class="alert alert-primary" role="alert">'.$thongbao.'</div>';
// }
// if(isset($thongbaoupdate)&&($thongbaoupdate!="")){
//     echo '<div class="alert alert-primary" role="alert">'.$thongbaoupdate.'</div>';
// }

?>
            <table class="table align-middle table-striped">
                <thead>
                    <th>Id</th>
                    <th>Tên Bài Viết</th>
                    <th>Nội Dung Bình Luận</th>
                    <th>Tên Người Bình Luận</th>
                    <th>Ngày Bình Luận</th>
                    <th>Hành Động</th>
                </thead>
                <tbody>
                    <!-- Row Item -->
                    <!-- Show list product here -->
                    <?php
$showcomment = showcomment_admin();
foreach ($showcomment as $comment) {
    //    print_r($comment);
    $nameblog = mb_substr($comment['blog_title'], 0, 20);
    $xoa_comment = "index.php?act=deletecommentblog&id=" . $comment['id_bl'];
    echo ' <tr>
                           <td>
                               ' . $comment['id_bl'] . '
                           </td>
                           <td class="productlist">
                               ' . $nameblog . '...
                           </td>
                           <td><span>' . $comment['noi_dungbl'] . '</span></td>
                           <td><span>' . $comment['ho_ten'] . '</span></td>
                           <td><span>' . $comment['ngay_bl'] . '</span></td>
                           <td>
                               <div class="d-flex align-items-center gap-3 fs-6">
                                   <a href="' . $xoa_comment . '"><i style="color:#e72e2e;" class="bi bi-trash-fill" data-bs-toggle="modal" data-bs-target="#exampleModal""></i></a>
                               </div>
                           </td>
                       </tr>';
}
?>



                    <!-- Modal -->
                    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bạn Muốn Xóa Bài Viết</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Nhấn xóa để xóa bài viết
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary">Xóa</button>
      </div>
    </div>
  </div>
</div> -->


                    <!-- <tr>
                              <td>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox">
                                  </div>
                              </td>
                              <td class="productlist">
                                  <a class="d-flex align-items-center gap-2" href="#">
                                      <div class="product-box">
                                          <img src="assets/images/products/10.png" alt="">
                                      </div>
                                      <div>
                                          <h6 class="mb-0 product-title">Orange Micro Headphone </h6>
                                      </div>
                                  </a>
                              </td>
                              <td><span>$18.00</span></td>
                              <td><span class="badge rounded-pill bg-success">Active</span></td>
                              <td><span>5-31-2020</span></td>
                              <td>
                                  <div class="d-flex align-items-center gap-3 fs-6">
                                      <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                          data-bs-placement="bottom" title="" data-bs-original-title="View detail"
                                          aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                      <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                          data-bs-placement="bottom" title="" data-bs-original-title="Edit info"
                                          aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                      <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                          data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                          aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                  </div>
                              </td>
                          </tr> -->
                </tbody>
            </table>
        </div>

        <nav class="float-end mt-4" aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>

    </div>
</div>
<button type="button" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">Open modal
    for
    @getbootstrap</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>
</main>
<!--end page main-->

<!-- Toggle Modal here -->






