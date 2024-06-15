<div class="container">
    <div class="sidebar">
        <a class="sidebar-item" href="http://localhost:8088/web/account/profile">Thông tin cá nhân</a>
        <a class="sidebar-item active" href="http://localhost:8088/web/account/purchase">Đơn hàng</a>
    </div>
    <div class="content-container">
        <div class="profile-content">
            <h3 style="text-align: center; margin-bottom: 20px">Đơn hàng của bạn</h3>
            <div class="card" style="margin-bottom: 10px; height: 60px; padding: auto; position: sticky;">
                <section class="card_state card-body">
                    <a class="state active" href="" title="Tất cả" aria-role="Tab" >
                        <span>Tất cả</span>
                    </a>
                    <a class="state" href="" title="Chờ xử lí" aria-role="Tab" >
                        <span>Chờ xử lí</span>
                    </a>
                    <a class="state" href="" title="Đang chuẩn bị" aria-role="Tab" >
                        <span>Đang chuẩn bị</span>
                    </a>
                    <a class="state" href="" title="Đang giao" aria-role="Tab" >
                        <span>Đang giao</span>
                    </a>
                    <a class="state" href="" title="Đã giao" aria-role="Tab" >
                        <span>Đã giao</span>
                    </a>
                    <a class="state" href="" title="Đã hủy" aria-role="Tab" >
                        <span>Đã hủy</span>
                    </a>
                </section>
            </div>
            <div class="card" style="margin-bottom: 10px; height: 60px; padding: auto;">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-2 d-flex justify-content-center">
                            <p class="name_col" style="display: none;"></p>
                        </div>
                        <div class="col-md-4 d-flex justify-content-center">
                            <p class="name_col">Tên sản phẩm</p>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                            <p class="name_col">Số lượng</p>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                            <p class="name_col">Giá bán</p>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                            <p class="name_col">Thành tiền</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" style="margin-bottom: 10px;">
                <div style="padding: 10px 24px; border-bottom: 1px groove; align-items:center; display:flex">
                    <div style="flex-grow:1;">
                        <span>Ngày đặt hàng: </span>
                        <span>15/06/2024</span>
                    </div>
                    <div style="display: flex; align-items:center;">
                        <p style="margin:0px">
                            <span style="padding-right: 5px;">Trạng thái:</span>
                            <span>Chờ xử lí</span>
                        </p>
                        <button class="button" onclick="deleteProduct(this)" style="border: 1px solid;margin-left:10px;background-color: #008CBA;color:white; border-radius:5px">Hủy đơn</button>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <img src="http://localhost:8088/web/public/clients/images/bo_minie_be_gai/bo_minie_be_gai_1.jpg"
                                alt="" class="img-fluid">
                        </div>
                        <div class="col-md-4 d-flex justify-content-center">
                            <div>
                                <p class="content_col">Bộ thun dài tay bé gái Minnie</p>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                            <div>
                                <p class="content_col">1</p>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                            <div>
                                <p class="content_col">299000</p>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                            <div>
                                <p class="content_col">299000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding: 10px 24px; border-top: soild">
                    <div class="float-end">
                        <span style="font-size: 17px;padding-right: 5px;">Tổng: </span>
                        <span style="font-size: 17px;">1616000</span>
                    </div>
                </div>
            </div>
            <div class="card" style="margin-bottom: 10px;">
                <div style="padding: 10px 24px; border-bottom: 1px groove; align-items:center; display:flex">
                    <div style="flex-grow:1;">
                        <span>Ngày đặt hàng: </span>
                        <span>15/06/2024</span>
                    </div>
                    <div style="display: flex; align-items:center;">
                        <p style="margin:0px">
                            <span style="padding-right: 5px;">Trạng thái:</span>
                            <span>Đã giao</span>
                        </p>
                        <button class="button hidden" onclick="deleteProduct(this)" style="border: 1px solid;margin-left:10px;background-color: #008CBA;color:white; border-radius:5px">Hủy đơn</button>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <img src="http://localhost:8088/web/public/clients/images/bo_minie_be_gai/bo_minie_be_gai_1.jpg"
                                alt="" class="img-fluid">
                        </div>
                        <div class="col-md-4 d-flex justify-content-center">
                            <div>
                                <p class="content_col">Bộ thun dài tay bé gái Minnie</p>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                            <div>
                                <p class="content_col">1</p>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                            <div>
                                <p class="content_col">299000</p>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                            <div>
                                <p class="content_col">299000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding: 10px 24px; border-top: soild">
                    <div class="float-end">
                        <span style="font-size: 17px;padding-right: 5px;">Tổng: </span>
                        <span style="font-size: 17px;">1616000</span>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 100%; height: 450px; text-align: center; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                <img class="img_card_none" src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/orderlist/5fafbb923393b712b964.png" alt="">
                <p>Chưa có đơn hàng</p>
            </div>
        </div>
    </div>
</div>

<script>
const profileText = document.querySelector(".profile-text");
const item = document.querySelector(".profile-dropdown");

profileText.addEventListener("click", (event) => {
    item.classList.toggle("dropdown-active");
    event.stopPropagation(); // Ngăn chặn sự kiện click từ việc lan ra ngoài
});

document.addEventListener("click", (event) => {
    const isClickInsideItem = item.contains(event.target);
    const isClickOnProfileText = event.target === profileText;
    if (!isClickInsideItem && !isClickOnProfileText) {
        item.classList.add("dropdown-active");
    }
});

/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
function myFunction() {
    document.getElementById("ac_menu").classList.toggle("show");
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>