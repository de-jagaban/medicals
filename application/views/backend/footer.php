<footer class="footer text-center"><i class="fa fa-globe"></i>2022 &copy; <?php echo $this->db->get_where('settings', array('type' => 'footer'))->row()->description;?></footer>

			
			
	