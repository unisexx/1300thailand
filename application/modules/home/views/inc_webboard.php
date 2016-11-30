<div class="col-md-12">
									<div class="title-webboard">บอร์ด กระ ทู้ ถาม - ตอบ</div>
										<a href="#" class="btn-post">ตั้งกระทู้ ถาม-ตอบ</a><img src="themes/1300/images/icon-faq.png" class="faq">
						</div>
						<div class="clearfix">&nbsp;</div>
						<!-------------------------StartTab------------------------------------------------------------>
										<div class="line-ttab">
										<ul id = "ttab" class = "nav nav-tabs">
											<?foreach($webboard_categories as $key=>$row):?>
												<li <?=$key==0?'class="active"':'';?>><a href = "#group_<?=$key?>" data-toggle = "tab"><?=$row->name?></a></li>
											<?endforeach;?>		
										</ul>
										</div>
										
										<div id = "myTabContent" class = "tab-content">
											<?foreach($webboard_categories as $key=>$category):?>
												<div class = "tab-pane fade <?=$key==0?'in active':'';?>" id = "group_<?=$key?>">
													    <table class="table" id="line-dashed">
															<tbody>
																<tr>
																	<th style="border-top: none; padding-top:15px;"># หัวข้อกระทู้</th>
																	<th style="border-top: none; padding-top:15px;">โพสโดย</th>
																	<th style="border-top: none; padding-top:15px;">อ่าน/ตอบ</th>
																</tr>
												<?foreach($category->webboard_quiz->where("quiz_status = 1")->order_by('quiz_sticky','desc')->order_by('id','desc')->get(6) as $row):?>
																<tr>
																	<td><?=$row->quiz_sticky==1?'<img src="themes/1300/images/icon-stick.png">':'';?> <a href="webboard/view/<?=$row->id?>"><?=$row->quiz_title?></a></td>
																	<td><?=$row->quiz_who?></td>
																	<td><?=$row->quiz_view?> / <?=$row->quiz_reply?></td>
																</tr>
												<?endforeach;?>
													</tbody>
											    </table>
											</div>
											<?endforeach;?>

						<!-------------------------End Tab------------------------------------------------------------>
			<div class="clearfix">&nbsp;</div>
		  </div>