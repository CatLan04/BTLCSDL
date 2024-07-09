<style>

</style>
<div class="container">
    <div class="sidebar">
        <a class="sidebar-item" href="http://localhost:8088/web/account/profile">Thông tin cá nhân</a>
        <a class="sidebar-item active" href="http://localhost:8088/web/account/purchase">Đơn hàng</a>
    </div>
    <div class="content-container">
        <div class="profile-content">
            <h3 style="text-align: center; margin-bottom: 20px">Đơn hàng của bạn</h3>
            <div class="card" style="height: 60px; padding: auto; position: sticky;">
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
            <div class="card" style="margin-top: 10px;">
                <div class="card-body" style="border-bottom: 1px solid rgba(0, 0, 0, .09);border-radius: 0 0 5px 5px;">
                    <div style="padding: 10px 24px;align-items:center; display:flex">
                        <div style="flex-grow:1;">
                            <span>Ngày đặt hàng: </span>
                            <span class="dd_time">15/06/2024 10:29:30.000</span>
                        </div>
                        <div style="display: flex; align-items:center;">
                            <p style="margin:0px">
                                <span style="padding-right: 5px;">Trạng thái:</span>
                                <span>Đã giao</span>
                            </p>
                            <button class="button hidden" onclick="deleteProduct(this)" style="border: 1px solid;margin-left:10px;background-color: #008CBA;color:white; border-radius:5px">Hủy đơn</button>
                        </div>
                    </div>
                    <div class="new_card" style="padding: 10px 24px;align-items:center; display:flex; border-top: 1px solid rgba(0, 0, 0, .09);">
                        <div style="flex-grow:1; display:flex;">
                            <img src="http://localhost:8088/web/public/clients/images/bo_minie_be_gai/bo_minie_be_gai_1.jpg"
                            alt="" class="img-fluid" style="width:100px">
                            <div style="padding: 0 0 0 12px;display:flex; align-items:center">
                                <div>
                                    <p class="content_col">Bộ thun dài tay bé gái Minnie</p>
                                    <p class="content_col">x1</p>
                                    <p>
                                        <span>Đơn giá: </span>
                                        <span class="amount-to-format">299000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="amount-to-format" class="content_col">299000</p>
                        </div>
                    </div>
                    <div class="new_card" style="padding: 10px 24px;align-items:center; display:flex; border-top: 1px solid rgba(0, 0, 0, .09);">
                        <div style="flex-grow:1; display:flex;">
                            <img src="http://localhost:8088/web/public/clients/images/bo_minie_be_gai/bo_minie_be_gai_1.jpg"
                            alt="" class="img-fluid" style="width:100px">
                            <div style="padding: 0 0 0 12px;display:flex; align-items:center">
                                <div>
                                    <p class="content_col">Bộ thun dài tay bé gái Minnie</p>
                                    <p class="content_col">x1</p>
                                    <p>
                                        <span>Đơn giá: </span>
                                        <span class="amount-to-format">299000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="amount-to-format" class="content_col">299000</p>
                        </div>
                    </div>
                </div>
                <div class="card-body" style="border-top: 1px solid rgba(0, 0, 0, .09);border-radius: 5px 5px 0 0;">
                    <div class="float-end" style="padding-right: 24px;">
                        <span style="font-size: 17px;padding-right: 5px;">Thành tiền: </span>
                        <span class="amount-to-format" style="font-size: 20px;color:red">1616000</span>
                    </div>
                </div>
            </div>
            <div class="card" style="margin-top: 10px;">
                <div class="card-body" style="border-bottom: 1px solid rgba(0, 0, 0, .09);border-radius: 0 0 5px 5px;">
                    <div style="padding: 10px 24px;align-items:center; display:flex">
                        <div style="flex-grow:1;">
                            <span>Ngày đặt hàng: </span>
                            <span class="dd_time">15/06/2024 19:06:30.000</span>
                        </div>
                        <div style="display: flex; align-items:center;">
                            <p style="margin:0px">
                                <span style="padding-right: 5px;">Trạng thái:</span>
                                <span>Chờ xử lí</span>
                            </p>
                            <button class="button" onclick="deleteProduct(this)" style="border: 1px solid;margin-left:10px;background-color: #008CBA;color:white; border-radius:5px">Hủy đơn</button>
                        </div>
                    </div>
                    <div class="new_card" style="padding: 10px 24px;align-items:center; display:flex; border-top: 1px solid rgba(0, 0, 0, .09);">
                        <div style="flex-grow:1; display:flex;">
                            <img src="http://localhost:8088/web/public/clients/images/bo_minie_be_gai/bo_minie_be_gai_1.jpg"
                            alt="" class="img-fluid" style="width:100px">
                            <div style="padding: 0 0 0 12px;display:flex; align-items:center">
                                <div>
                                    <p class="content_col">Bộ thun dài tay bé gái Minnie</p>
                                    <p class="content_col">x1</p>
                                    <p>
                                        <span>Đơn giá: </span>
                                        <span class="amount-to-format">299000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="amount-to-format" class="content_col">299000</p>
                        </div>
                    </div>
                </div>
                <div class="card-body" style="border-top: 1px solid rgba(0, 0, 0, .09);border-radius: 5px 5px 0 0;">
                    <div class="float-end" style="padding-right: 24px;">
                        <span style="font-size: 17px;padding-right: 5px;">Thành tiền: </span>
                        <span class="amount-to-format" style="font-size: 20px;color:red">1616000</span>
                    </div>
                </div>
            </div>
            <div class="card" style="margin-top: 10px;width: 100%; height: 450px; text-align: center; display: flex; flex-direction: column; justify-content: center; align-items: center;">
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
<script>
// Hàm để định dạng số tiền sang VND
function formatToVND(amount) {
    return amount.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
}

// Lặp qua tất cả các thẻ có class="amount-to-format" và định dạng lại số tiền thành VND
document.querySelectorAll('.amount-to-format').forEach(element => {
    const amountValue = parseFloat(element.textContent); // Lấy giá trị số tiền từ nội dung của thẻ
    element.textContent = formatToVND(amountValue); // Định dạng lại số tiền thành VND và cập nhật nội dung của thẻ
});
</script>
<script>
function removeMilliseconds(dateTimeStr) {
    // Tách chuỗi thành ngày và thời gian
    let parts = dateTimeStr.split(' ');

    // Lấy phần ngày và phần thời gian
    let datePart = parts[0];
    let timePart = parts[1];

    // Tách phần thời gian để loại bỏ ".000"
    let timeParts = timePart.split('.');
    let timeWithoutMs = timeParts[0];

    // Kết hợp lại thành định dạng mới
    let formattedDateTime = datePart + ' ' + timeWithoutMs;

    return formattedDateTime;
}

window.onload = function() {
    document.querySelectorAll(".dd_time").forEach((value, index) => {
        value.textContent = removeMilliseconds(value.textContent);
        console.log(value);
    })
};
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>