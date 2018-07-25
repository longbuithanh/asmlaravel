<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('animals')->delete();
        DB::table('animals')->insert(
            [
                'id' => 1,
                'name' => 'Poodle',
                'description' => 'Poodle là giống chó mini cỡ siêu nhỏ, cao trung bình 25-40cm, nặng dưới 5kg. Chúng là giống chó lội nước và chuyên săn vịt trời nổi tiếng của Pháp/Đức. Chúng được xếp vào top những giống chó đẹp nhất thế giới.

Chó Poodle khá thân thiện, năng động, và hòa đồng, nên được nuôi làm chó cảnh khá phổ biến. Ở Việt Nam, đây là loại chó được yêu thích nhất hiện nay.',
                'price' => 1000000,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRq3Y1gcG60NjHv3v59lFCh2Zt1LVpbDVnOWRJJZPF6uXh7cjGX'
            ],
            [
                'id' => 2,
                'name' => 'Husky Siberian',
                'description' => 'Husky Siberian thuộc top giống chó đẹp được giới chơi thú cưng cực kỳ yêu thích và sưu tầm. Chó Husky có cân nặng trên dưới 25kg của vùng Siberian. Chúng khá vui vẻ, thân thiện, nhẹ nhàng và thông minh. Chúng vốn là giống chó kéo xe. Ở Việt Nam, khá nhiều người yêu thích giống chó này.',
                'price' => 10000000,
                'image' => 'http://meocun.com/wp-content/uploads/cho-husky-14-giong-cho-dep-nhat-the-gioi-2-600x375.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Alaska',
                'description' => 'Cũng như Husky, Alaska thuộc giống chó cỡ trung, có chiều cao trung bình 60cm, nặng trên dưới 40kg của vùng Alaska. Nó được nuôi để kéo xe như giống Siberian Husky. Chúng được đánh giá là thuộc loại giống chó đẹp nhất thế giới và có tính cách mạnh mẽ, bền bỉ, trung thành tận tụy, thân thiện, trìu mến và thông minh.',
                'price' => 10000000,
                'image' => 'http://meocun.com/wp-content/uploads/cho-alaska-14-giong-cho-dep-nhat-the-gioi-1-600x400.jpg'
            ],
            [
                'id' => 4,
                'name' => 'Pomeranian',
                'description' => 'Chó Phốc sóc  là giống chó cỡ siêu nhỏ chỉ nặng từ 1.3 – 3.3 kg và chiều cao cao nhất chỉ ngưỡng 25-30cm. Chúng là loài chó cảnh được nuôi phổ biến nhất hiện nay bởi vẻ dễ thương, nhỏ nhắn, xinh xắn. Chúng khá trung thành, tính cảnh giác cao độ, thích sống trong nhà và gần gũi con người. Tính cách năng động, vui tươi, dễ dàng hòa thuận với mèo và các vật nuôi khác.',
                'price' => 10000000,
                'image' => 'http://meocun.com/wp-content/uploads/cho-pomeranian-cho-phoc-soc-14-giong-cho-dep-nhat-the-gioi-2-600x400.jpg'
            ],
            [
                'id' => 5,
                'name' => 'Golden Ritriever',
                'description' => 'Golden Ritriever được nuôi phổ biến trên thế giới, cao trung bình 60-70cm và nặng 30-35kg. Tính cách thông minh, luôn vui vẻ, biết vâng lời, trung thành. Chó Golden thường được đào tạo, huấn luyện phục vụ đặc biệt trong quân đội hoặc hỗ trợ người tàn tật, người mù do chúng rất thông minh.

',
                'price' => 10000000,
                'image' => 'http://meocun.com/wp-content/uploads/cho-golden-retriever-14-giong-cho-dep-nhat-the-gioi-1-600x337.jpg'
            ],
            [
                'id' => 6,
                'name' => 'Beagle',
                'description' => 'Là loại chó cỡ nhỏ, cao trung bình từ 14-16cm, cân nặng khoảng 11kg. Như một phiên bản chó săn thu nhỏ. Chúng được yêu mến nhờ tính cách cực kỳ thân thiện và thông minh, thích náo nhiệt và khám phá ngoài trơi. Và đây cũng là giống chó cảnh có thể tham gia vào các trò chơi hoặc làm bạn với trẻ em.',
                'price' => 10000000,
                'image' => 'http://meocun.com/wp-content/uploads/cho-san-tho-beagle-14-giong-cho-dep-nhat-the-gioi-1-600x400.jpg'
            ],
            [
                'id' => 7,
                'name' => 'Akita Inu',
                'description' => 'Thuộc dòng giống cỡ lớn, có thể nặng tới 60kg của Nhật và đạt đến chiều cao khoảng 65cm. Chúng luôn cảnh giác, mặt rất hình sự nhưng lại ngoan ngoãn, phục tùng và rất dũng cảm. Khi xưa, chó Akita được người Nhật nuôi để đi săn bắn.',
                'price' => 10000000,
                'image' => 'http://meocun.com/wp-content/uploads/cho-kita-inu-14-giong-cho-dep-nhat-the-gioi-1-600x400.jpg'
            ],
            [
                'id' => 8,
                'name' => 'Finnish Spizt ',
                'description' => 'Là giống chó cỡ nhỏ trên dưới 10kg có nguồn gốc từ Phần Lan được lai tạo để săn những loài thú gặm nhấm (thỏ). Được đánh giá là loài chó trung thành, thông minh, yêu đời, vui tươi và độc lập.',
                'price' => 10000000,
                'image' => 'http://meocun.com/wp-content/uploads/cho-san-tho-finnish-spitz-14-giong-cho-dep-nhat-the-gioi-1.jpg'
            ],
            [
                'id' => 9,
                'name' => 'Berger Blanc Suisse',
                'description' => 'Thuộc giống chó cỡ trung, trên dưới 40kg, có nguồn gốc từ Thụy Điển, cùng nguồn gốc với chó Béc giê Đức. Được đánh giá là thông minh, hiếu động nhưng ân cần, chu đáo. Có thể nuôi làm cảnh hoặc huấn luyện thành chó bảo vệ.

Chó Berger được đánh giá là một trong những giống chó đẹp nhất thế giới, thường xuất hiện trong các bộ phim cổ xưa huyền thoại Trung Hoa.',
                'price' => 10000000,
                'image' => 'http://meocun.com/wp-content/uploads/cho-berger-blanc-suisse-14-giong-cho-dep-nhat-the-gioi-600x400.jpg'
            ],
            [
                'id' => 10,
                'name' => 'Iceland',
                'description' => 'Được mang tới Iceland bởi người Viking. Là giống chó cỡ trung bình, trên dưới 35kg. Có thể nuôi làm cảnh hoặc chăn cừu. Khỏe mạnh, nhanh nhẹn, năng động, vui vẻ nhưng cũng có tính cảnh giác cao.',
                'price' => 10000000,
                'image' => 'http://meocun.com/wp-content/uploads/cho-iceland-14-giong-cho-dep-nhat-the-gioi-meocun-600x400.jpg'
            ],
            [
                'id' => 11,
                'name' => 'American Eskimo',
                'description' => 'Là giống chó cỡ siêu nhỏ, dưới 5kg. Chúng được nhiều người yêu thích nuôi làm cảnh bởi vẻ ngoài dễ thương vô đối. Là giống chó của Mỹ nhưng xuất phát từ Đức.  Chúng rất thân thiện và thông mình.',
                'price' => 10000000,
                'image' => 'http://meocun.com/wp-content/uploads/cho-american-eskimo-14-giong-cho-dep-nhat-the-gioi-meocun-1-600x400.jpg'
            ],
            [
                'id' => 12,
                'name' => 'Shiba Inu',
                'description' => 'Là giống chó săn cỡ nhỏ, trên dưới 10kg của Nhật. Tuy nhỏ nhưng không biết sợ là gì, luôn cảnh giác cao độ, tự tin, trung thành và ân cần với chủ nhân.',
                'price' => 10000000,
                'image' => 'http://meocun.com/wp-content/uploads/cho-shiba-inu-14-giong-cho-dep-nhat-the-gioi-600x400.jpg'
            ],
            [
                'id' => 13,
                'name' => 'Samoyed',
                'description' => 'Là giống chó của người Samoyed vùng Siberia, cân nặng trung bình trên dưới 30kg. Được người Samoyed dùng kéo xe trượt tuyết. Chúng có tính cách vui tươi, thân thiện, hòa đồng nhưng cũng rất cứng đầu.',
                'price' => 10000000,
                'image' => 'http://meocun.com/wp-content/uploads/cho-samoyed-14-giong-cho-dep-nhat-the-gioi-600x399.jpg'
            ],
            [
                'id' => 14,
                'name' => ' Japannese Spizt',
                'description' => 'Là giống chó cảnh tuyệt đẹp của Nhật. Nặng trung bình trên dưới 10kg. Chiếm thiện cảm của con người nhờ tính cách vui tươi, ngoan ngoãn, thân mật, tự hào và khá thông minh.',
                'price' => 10000000,
                'image' => 'http://meocun.com/wp-content/uploads/cho-japanese-spitz-14-giong-cho-dep-nhat-the-gioi-600x350.jpg'
            ],
            [
                'id' => 15,
                'name' => 'German Shepherd',
                'description' => 'German Shepherd là giống chó cỡ trung bình, nặng từ 20 – 40kg, cao 55 – 65cm, xuất xứ từ Đức. Đây là một giống chó khá mới trong gia phả loài chó, được lai tạo lần đầu vào năm 1899 ở Đức, thuộc nhóm chó chăn gia súc. Ban đầu được gây giống để chăn cừu, về sau được huấn luyện để phục vụ trong cảnh sát và quân đội do sự thông minh, mạnh mẽ, nhanh nhẹn, trung thành và có khả năng tuân thủ tốt mệnh lệnh trong huấn luyện. Chó becgie là giống chó phục vụ nhiều nhất trong lực lượng cảnh sát ở các nước trên thế giới.',
                'price' => 10000000,
                'image' => 'https://lh3.googleusercontent.com/-QcOK-6QVwTQ/Vo42p_94_PI/AAAAAAAAVqo/l-Yxixb5ttQ/s700-Ic42/ch%2525C3%2525B3-becgie.jpg'
            ],
            [
                'id' => 16,
                'name' => 'Labrador Retriever',
                'description' => 'Labrador là giống chó săn phổ biến ở Mỹ, thường được huấn luyện để tha mồi trong các cuộc đi săn. Trong quá khức, Labrador là giống chó rất được ưa chuộng bởi các thủy thủ người Bồ Đào Nha vì chúng hiền lành, thân thiện, rất thông minh và mạnh mẽ, chúng có thể giúp ngư dân kéo lưới, bắt cá. Labrador cũng được coi là giống chó phổ biến nhất ở Mỹ trong suốt nhiều năm qua, chúng được nuôi trong các gia đình và thường được coi như thành viên trong nhà.',
                'price' => 10000000,
                'image' => 'http://meocun.com/wp-content/uploads/cho-american-eskimo-14-giong-cho-dep-nhat-the-gioi-meocun-1-600x400.jpg'
            ],
            [
                'id' => 17,
                'name' => 'Great Dane',
                'description' => 'Great Dane là giống chó cảnh đẹp mà còn là gióng chó cao nhất thế giới, một cá thể của giống Great Dane hiện đang giữ kỷ lục guiness là chú chó cao nhất thế giới với chiều cao tới 1.2m và nặng 70.3kg. Chó Great Dane được nuôi rất phổ biến ở Mỹ trong các gia đình. Tuy có kích thước ngoại cỡ nhưng chúng rất hiền lành và gần gũi với con người. Chó great dane có thân hình cân đối, ngực nở, bụng thắt, chân cao và cực kỳ nhanh nhẹn. Chúng có thể có các màu đen, trắng, vàng nhạt (khá hiếm) hoặc trộn lẫn các màu này.

',
                'price' => 10000000,
                'image' => 'https://lh3.googleusercontent.com/-JrfIvGnYyYk/Vo42pyXKmaI/AAAAAAAAVqg/gITMepu_mbY/s640-Ic42/ch%2525C3%2525B3-Great-Dane.jpg'
            ],
            [
                'id' => 18,
                'name' => 'Dobermann Pinscher',
                'description' => 'Chú chó Doberman đầu tiên ra đời tại Đức vào năm 1890, bởi nhà lai tạo Louis Dorbermann. Doberman ra đời là sự kết hợp giữa các giống chó mạnh mẽ German Pinscher, Rottweiler, Thuringian Shepherd, Greyhound đen, Great Dane, Weimaraner, German Shorthaired Pointer và German Shepherd cổ. Tỉ lệ kết hợp chính xác cho đến nay vẫn chỉ có Louis Dobermann nắm giữ. Tuy nhiên, người ta chắc chắn rằng, chó doberman mang dòng máu của ít nhất 4 giống chó kể trên.

',
                'price' => 10000000,
                'image' => 'http://meocun.com/wp-content/uploads/cho-american-eskimo-14-giong-cho-dep-nhat-the-gioi-meocun-1-600x400.jpg'
            ],
            [
                'id' => 19,
                'name' => 'Pit Bull',
                'description' => 'Chó Pitbull có nguồn gốc từ Anh, nhập cảnh vào Mỹ từ những năm cuối thế kỷ 18. Chó Pitbull ban đầu khá nhỏ bé, dần dần chúng được lai tạo để trở nên lớn hơn và hung dữ hơn để phục vụ môn thể thao “tao nhã” của người đương thời là chọi chó và Bull & Bear Baiting (đánh nhau với bò và gấu xám). Tên Pitbull cũng ra đời từ môn thể thao này. Vào đầu thế kỷ 20, những trò giải trí như chọi chó và bull bear baiting bị coi là vô nhân đạo và bị cấm trên toàn nước Mỹ và châu Âu. Những chú pitbull được lai tạo để hiền lành hơn và chuyển đổi mục thành những chú chó nuôi trong nhà.',
                'price' => 10000000,
                'image' => 'http://meocun.com/wp-content/uploads/cho-american-eskimo-14-giong-cho-dep-nhat-the-gioi-meocun-1-600x400.jpg'
            ],
            [
                'id' => 20,
                'name' => 'Chow Chow',
                'description' => 'Đây là giống chó có dáng dấp quý tộc với bộ lông dày xù và dáng vóc khổng lồ, khiến chúng mang vẻ duyên dáng và dũng mãnh của loài sư tử. Đặc biệt chiếc lưỡi của chúng luôn có màu xanh hoặc đen đặc trưng vô cùng độc đáo. Giống chó này cực kỳ trung thành và hung dữ, săn bắt rất giỏi, tuy nhiên chúng cũng rất cần được chăm sóc và yêu thương.',
                'price' => 10000000,
                'image' => 'http://s1.img.yan.vn/YanNews/2167221/201701/20170116-125836-chow-chow-hereditary-health-and-genetic-diversity-54be9a5a98044_600x400.jpg'
            ]
        );
    }
}
