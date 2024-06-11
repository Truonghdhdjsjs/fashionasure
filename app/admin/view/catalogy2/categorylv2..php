
             <section id="catology_lv2">
                <header class="catology_lv2_header">
                    <a href="../admin/index.html">Bảng điều khiển</a>
                    /
                    <a href="../admin/categorylv2..html">Danh mục cấp 2</a>
                </header>
                <nav class="catology_lv2_header_nav">
                    <form action="" method="post">
                        <div class="catology_lv2_tool">
                            <div class="catology_lv2_tool_plus">
                                <a href="../admin/index?admin=pluscatalogy2">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>Thêm mới</span>
                                </a>
                            </div>
                            <div class="catology_lv2_tool_delete">
                                <a href="">
                                    <i class="fa-solid fa-trash-can"></i>
                                    <span>Xóa tất cả</span>
                                </a>
                            </div>
                            <div class="catology_lv2_search">
                                <input type="search" name="txtsearch" id="txtsearch" placeholder="Tìm kiếm">
                                <input type="submit" value="Nhập" onclick="return btnsearch()" id="search">
                                <div class="error"></div>
                            </div>
                        </div>
                        <div class="catology_lv2_select">
                            <select name="txtchoose" id="txtselext">
                                 <option value="0" selected>Chọn danh mục</option>
                                 <?php
                                    if(isset($getallcataone)&&count($getallcataone)>0)
                                    {
                                            foreach ($getallcataone as $choose ) {
                                                # code...
                                                echo' <option value="'.$choose['id'].'">'.$choose['tendm'].'</option>';
                                            }
                                    }
                                 ?>
                            </select>
                        </div>
                        <div class="tb_category_lv2">
                            <header class="table_category_lv2_header">
                                <p>danh sách danh mục cấp 2</p>
                            </header>
                            <table class="table_category_lv2">
                                <tr>
                                    <th>STT</th>
                                   
                                    <th>Tiêu đề</th>
                                    <th>Hiển thị </th>
                                    <th>Nổi bật</th>
                                    <th>Thao tác</th>
                                </tr>
                                <?php
                                    if(isset($getall)&&count($getall)>0)
                                    {
                                        $i=1;
                                        foreach($getall as $dm2)
                                        {
                                            echo' <tr>
                                                    <td>'.$i.'</td>                                    
                                                    <td><span>'.$dm2['tendm'].'</span></td>
                                                    <td><input type="checkbox" name="txtdisplay" id="txtdisplay"></td>
                                                    <td><input type="checkbox" name="txtoutstanding" id="txtoutstanding"></td>
                                                    <td><a href="../admin/index.php?admin=editdm2&id='.$dm2['id'].'" class="edit"><i class="fa-solid fa-pen-to-square"></i></a>|<a href="../admin/index.php?admin=delcatalogy2&id='.$dm2['id'].'" class="trash"><i class="fa-solid fa-trash-can"></i></a></td>
                                            </tr>';
                                            $i++;
                                        }
                                    }
                                ?>
                              
                            </table>
                       
                        </div>
                    </form>
                </nav>
             </section>
            </div>
       
   