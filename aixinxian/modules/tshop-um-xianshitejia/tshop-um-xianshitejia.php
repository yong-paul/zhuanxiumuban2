<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-xianshitejia"��class���Կ�����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>
<div class="tb-module tshop-um tshop-um-xianshitejia">
<div class="neo-hd"><img src="assets/images/title.png" ></div>
<div class="neo-bd">
<ul class="itemlist">

 <?
		if($_MODULE['neo-items']){ $ids=explode(',',$_MODULE['neo-items']);

	 $items = $itemManager->queryByIds($ids,"hotsell");}
		else{$items  = $itemManager-> queryByKeyword ("","hotsell",6);}
		
  


		foreach($items as $item ){
			
			echo '<li>';
			echo '<div class="neo-item-220pic"><a href="'.$uriManager-> detailURI($item).'" target="_blank"><img src="'.$item-> getPicUrl(220).'"/></a></div>';
			
		echo  '<div class="neo-item-desc">';
		echo  '<div class="neo-discountprice">��'.$item->discountPrice.'</div>';
		echo  '<div class="neo-price">�ο��ۣ���'.$item->price.'</div>';
	        echo  '<div class="neo-item-title">'.'<a href="'.$uriManager-> detailURI($item).'" target="blank">'.$item->title.'</a></div>';
			
			echo  '<div class="neo-soldCount">������'.$item->soldCount.'��</div>';	        
			echo  '<div class="neo-favmore"><span>�ղ�������'.$item->collectedCount.'</span>';				
			echo '<span class="neo-fav"><a href="'.$uriManager->favoriteLink().'" target="blank">(����ղ�)</a></span></div>';
			
			
			 echo  '<div class="neo-addcart">'.'<a class="J_CartPluginTrigger" href="'.$uriManager-> detailURI($item).'" target="blank">���빺�ﳵ'.'</a></div>';
			
		echo  '</div>';

			 
			 echo '</li>';

         }

   
   ?>
</ul>

</div>



</div>