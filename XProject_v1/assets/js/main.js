// Bắt sự kiện khi người dùng nhấp vào nút "Sign Up"
document.getElementById('signup-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Ngăn chặn hành vi gửi form mặc định

    // Thực hiện hành động tương ứng ở đây
    alert('Form submitted!'); // Ví dụ: Hiển thị thông báo

    // Sau khi xử lý sự kiện, bạn có thể tiếp tục gửi form bằng cách sử dụng:
    // this.submit();
});