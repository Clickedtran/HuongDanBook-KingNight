<?php

namespace KingNightVN\Book;

use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as C;
use pocketmine\item\WrittenBook;
use pocketmine\item\Item;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener{
 
 public function onEnable(): void{
  $this->getLogger()->info("Test Book");
}
 
 public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args): bool{
  if($sender instanceof Player){
   switch($cmd->getName()){
    case "huongdan":
    $item = Item::get(387, 0, 1);
        $item->setTitle(C::GREEN.C::UNDERLINE."§l§c•>§eHướng Dẫn§c<•");
        $item->setPageText(0, "§e•§9§lWELCOME TO SERVER" . "\n§0 Nếu bạn là người mới và không biết cách chơi như nào". "\n§0Hãy đọc những hướng dẫn này nhé vì nó có thể sẽ giúp ít cho bạn" . "\n§c>§9/warpgui§0 Nơi chứa tất cả khu vực trong Server!" . "\n§c>§9/sb§0 Mở menu đảo của bạn" . "\n§c>§9/muamoney§0 Dùng để đổi Point \n§0ra Money trong Server\n");
        $item->setPageText(1, "§l§c>§9/doipoint§0 Dùng để đổi Money \nra Point trong Server" . "\n§c>§9/ssp§0 Nơi bạn có thể nhận quà free\n§0khi cày đủ số cấp Sổ Sứ Mệnh" . "\n§c>§9/seeinforp§0 Để xem level\n§0Sổ Sứ Mệnh của bạn" . "\n§c>§9/napthe§0 Để ủng hộ Server \n§0bằng cách nạp thẻ\n");
        $item->setPageText(2, "§l§c>§9/thoren§0 Để sửa chửa, đổi tên, thêm chi tiết cho\n§0vật phẩm ngay trên tay bạn\n§c>§9/choden§0 Nơi buôn bán các món\n§0đồ của bạn trong Server" ."\n§l§c> §9/menu§0 Mở menu của Server!" . "\n§0Thắc mắc xin liên hệ Admin". "\n§0THANK FOR WATCHING!!!!");
        $item->setAuthor("Server");
        $sender->getInventory()->addItem($item);
       }
     }
     return true;
   }
 }