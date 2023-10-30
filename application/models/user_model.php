<?php

class User_model extends CI_Model{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    public function get_user($user_id) {
       
        $query = $this->db->get_where('users', array('id' => $user_id));
        $user = $query->row(); 
       return $user;
    }
    // create identufire new users
    public function create_flag($flag) {
       
        $this->db->insert('user_flag', $flag);
        //$flag['id'] = $this->db->insert_id();
        //$row    =   $this->select_client($data['id']);
        //return $row;
    }
    
    // get new user flag detail
    public function get_flag($user_id) {
       
        $query = $this->db->get_where('user_flag', array('user_id' => $user_id));
        $user_flag = $query->row(); 
       return $user_flag;
    }
    // delete user flag
    public function delete_flag($id) {
        
       $this->db->where('user_id', $id);
       $this->db->delete('user_flag'); 
    }
    
// 
    // function archive_path($job_id)
    // {
        // $query = $this->db->query('SELECT date_format(job_date, \'%Y/%m\') AS folder FROM `a8_job_card` WHERE id=?', array($job_id));
        // if ($query->num_rows() > 0) {
            // $row = $query->row();
            // return $row->folder;
        // } else {
            // return FALSE;
        // }
    // }
// 
    // public function getCount()
    // {
        // $sql = 'SELECT DISTINCT COUNT(*) AS row_count FROM (`a8_job_card`)
		// LEFT JOIN `a8_client` ON `a8_client`.`id` = `a8_job_card`.`client_id` 
		// LEFT JOIN `a8_payment` ON `a8_payment`.`job_id` = `a8_job_card`.`id` 
		// LEFT JOIN `a8_contacts` ON `a8_contacts`.`contact_id` = `a8_job_card`.`contact_id` 
		// LEFT JOIN `a8_staff` ON `a8_staff`.`id` = `a8_job_card`.`assigned_to` 
		// WHERE `a8_job_card`.`status` = ?';
        // $query = $this->db->query($sql, array($this->status));
        // log_message('debug', $this->db->last_query());
        // return $query->row()->row_count;
    // }
// 
    // /**
     // * Delete print
     // */
    // public function delete_print($id)
    // {
        // $deleted = $this->db->delete('job_prints', array('id' => $id));
        // log_message('debug', $this->db->last_query());
        // return $deleted;
    // }
// 
    // function get_delivery($job_id)
    // {
        // $query = $this->db->get_where('delivery', array('job_id' => $job_id));
        // log_message('debug', $this->db->last_query());
        // return $query->row();
    // }
// 
    // function get_delivery_options()
    // {
        // $options = array(
            // 'pending' => 'Pending',
            // 'delivered' => 'Delivered'
        // );
        // return $options;
    // }
// 
    // function get_details($job_id)
    // {
        // $sql = "SELECT cash_invoice_no, client_name, invoice_date
        // FROM `a8_job_details`
        // WHERE job_id = ?";
        // $query = $this->db->query($sql, array($job_id));
        // log_message('debug', $this->db->last_query());
        // return $query->row();
    // }
// 
    // function get_job($job_id)
    // {
        // $query = $this->db->get_where('job_card', array('id' => $job_id));
        // $job = $query->row();
        // log_message('debug', $this->db->last_query());
        // if (!isset($job->due_date)) {
            // $job->due_date = date('d/m/Y');
        // }
        // return $job;
    // }
// 
    // function get_latest_receipts($uinput)
    // {
        // $this->db->select('payment.id, job_id, client_id, company,
		// UNIX_TIMESTAMP(payment_date) as payment_date, bank, branch, cheque_no,
		// amount');
        // $this->db->order_by('payment_date', 'desc');
        // $this->db->join('client', 'payment.client_id = client.id');
        // $query = $this->db->get('payment', 50, $uinput['qoffset']);
        // $receipts = $query->result();
        // log_message('debug', $this->db->last_query());
        // return $receipts;
    // }
// 
    // function get_latest_receiptscount()
    // {
        // $this->db->select('payment.id, job_id, client_id, company,
			// UNIX_TIMESTAMP(payment_date) as payment_date, bank, branch, cheque_no,
			// amount');
        // $this->db->order_by('payment_date', 'desc');
        // $this->db->join('client', 'payment.client_id = client.id');
        // $query = $this->db->get('payment');
// 
        // log_message('debug', $this->db->last_query());
        // return $query->num_rows();
    // }
// 
    // // funtions to filter receipts
    // function get_filter_receipts($uinput)
    // {
// 
        // $this->db->select('payment.id, job_id, client_id, company,
			// UNIX_TIMESTAMP(payment_date) as payment_date, bank, branch, cheque_no,
			// amount');
// 
        // $this->db->where($uinput['tbhead'], $uinput['filterdata']);
// 
        // $this->db->order_by('payment_date', 'desc');
        // $this->db->join('client', 'payment.client_id = client.id');
        // $query = $this->db->get('payment', 50);
        // $receipts = $query->result();
        // log_message('debug', $this->db->last_query());
        // return $receipts;
    // }
// 
    // function get_filterbyclient_receipts($uinput)
    // {
// 
        // $this->db->select('payment.id, job_id, client_id, company,
				// UNIX_TIMESTAMP(payment_date) as payment_date, bank, branch, cheque_no,
				// amount');
// 
        // $this->db->like('client.company', $uinput['filterdata']);
// 
        // $this->db->order_by('client.company', 'asc');
        // $this->db->join('client', 'payment.client_id = client.id');
        // $query = $this->db->get('payment', 50, $uinput['qoffset']);
        // $receipts = $query->result();
        // log_message('debug', $this->db->last_query());
        // return $receipts;
    // }
// 
    // function get_filterbyclient_receiptscount($uinput)
    // {
// 
        // $this->db->select('payment.id, job_id, client_id, company,
					// UNIX_TIMESTAMP(payment_date) as payment_date, bank, branch, cheque_no,
					// amount');
// 
        // $this->db->like('client.company', $uinput['filterdata']);
// 
        // $this->db->order_by('client.company', 'asc');
        // $this->db->join('client', 'payment.client_id = client.id');
        // $query = $this->db->get('payment');
        // log_message('debug', $this->db->last_query());
        // return $query->num_rows();
    // }
// 
    // function get_filterbydate_receipts($uinput)
    // {
// 
        // $this->db->select('payment.id, job_id, client_id, company,
				// UNIX_TIMESTAMP(payment_date) as payment_date, bank, branch, cheque_no,
				// amount');
// 
        // $this->db->where('UNIX_TIMESTAMP(payment_date)' . ' >= ', $uinput['filterdata']);
        // $this->db->where('UNIX_TIMESTAMP(payment_date)' . ' <= ', $uinput['filterdata2']);
// 
        // $this->db->order_by('payment_date', 'desc');
        // $this->db->join('client', 'payment.client_id = client.id');
        // $query = $this->db->get('payment', 50, $uinput['qoffset']);
        // $receipts = $query->result();
        // log_message('debug', $this->db->last_query());
        // return $receipts;
    // }
// 
    // function get_filterbydate_receiptscount($uinput)
    // {
// 
        // $this->db->select('payment.id, job_id, client_id, company,
					// UNIX_TIMESTAMP(payment_date) as payment_date, bank, branch, cheque_no,
					// amount');
// 
        // $this->db->where('UNIX_TIMESTAMP(payment_date)' . ' >= ', $uinput['filterdata']);
        // $this->db->where('UNIX_TIMESTAMP(payment_date)' . ' <= ', $uinput['filterdata2']);
// 
        // $this->db->order_by('payment_date', 'desc');
        // $this->db->join('client', 'payment.client_id = client.id');
        // $query = $this->db->get('payment');
// 
        // log_message('debug', $this->db->last_query());
        // return $query->num_rows();
    // }
// 
    // function get_filterbyamount_receipts($uinput)
    // {
// 
        // $this->db->select('payment.id, job_id, client_id, company,
					// UNIX_TIMESTAMP(payment_date) as payment_date, bank, branch, cheque_no,
					// amount');
// 
        // $this->db->where('amount' . ' >= ', $uinput['filterdata']);
        // $this->db->where('amount' . ' <= ', $uinput['filterdata2']);
// 
        // $this->db->order_by('amount', 'asc');
        // $this->db->join('client', 'payment.client_id = client.id');
        // $query = $this->db->get('payment', 50, $uinput['qoffset']);
        // $receipts = $query->result();
        // log_message('debug', $this->db->last_query());
        // return $receipts;
    // }
// 
    // function get_filterbyamount_receiptscount($uinput)
    // {
// 
        // $this->db->select('payment.id, job_id, client_id, company,
						// UNIX_TIMESTAMP(payment_date) as payment_date, bank, branch, cheque_no,
						// amount');
// 
        // $this->db->where('amount' . ' >= ', $uinput['filterdata']);
        // $this->db->where('amount' . ' <= ', $uinput['filterdata2']);
// 
        // $this->db->order_by('amount', 'asc');
        // $this->db->join('client', 'payment.client_id = client.id');
        // $query = $this->db->get('payment');
// 
        // log_message('debug', $this->db->last_query());
        // return $query->num_rows();
    // }
// 
    // // funtions to filter receipts
// 
    // function get_payment($payment_id)
    // {
        // $sql = "SELECT id, job_id, client_id, payment_type,
        // UNIX_TIMESTAMP(payment_date) AS payment_date, amount,
        // bank,branch,cheque_no, tax, tax_type
        // FROM a8_payment
        // WHERE id=?
        // ORDER BY payment_date ASC";
        // $query = $this->db->query($sql, array($payment_id));
        // log_message('debug', $this->db->last_query());
        // return $query->row();
    // }
// 
    // function get_payments($job_id, $client_id)
    // {
        // $sql = "SELECT `id`, `job_id`, `client_id`, `payment_type`,
				// UNIX_TIMESTAMP(`payment_date`) AS `payment_date`, `amount`,
				// `bank`,`branch`,`cheque_no`
				// FROM `a8_payment`
				// WHERE `job_id`=? AND `client_id`=?
				// ORDER BY `payment_date` ASC";
        // $query = $this->db->query($sql, array(
            // $job_id,
            // $client_id
        // ));
        // log_message('debug', $this->db->last_query());
        // return $query->result();
    // }
//     
//     
    // function get_promo_payments($job_id, $client_id)
    // {
        // $sql = "SELECT `id`, `job_id`, `client_id`, `payment_type`,
                // UNIX_TIMESTAMP(`payment_date`) AS `payment_date`, `amount`,
                // `bank`,`branch`,`cheque_no`
                // FROM `a8_promo`
                // WHERE `job_id`=? AND `client_id`=?
                // ORDER BY `payment_date` ASC";
        // $query = $this->db->query($sql, array(
            // $job_id,
            // $client_id
        // ));
        // log_message('debug', $this->db->last_query());
        // return $query->result();
    // }
// 
    // /**
     // * Get print
     // */
    // function get_print($id)
    // {
        // $query = $this->db->get_where('job_prints', array('id' => $id));
        // log_message('debug', $this->db->last_query());
        // return $query->row_array();
    // }
// 
    // function getTotal()
    // {
        // $sql = "SELECT SUM(`sub_total`) AS total FROM `a8_job_card` a WHERE a.`status`=?";
        // $query = $this->db->query($sql, array($this->status));
        // $result = $query->row();
        // log_message('debug', $this->db->last_query());
        // return $result->total;
    // }
// 
    // function getListCount($criteria)
    // {
        // $this->db->distinct();
        // $this->db->select('COUNT(*) as row_count');
        // $this->db->from('job_card');
        // $this->db->join('client', 'client.id = job_card.client_id', 'left');
        // $this->db->join('payment', 'payment.job_id = job_card.id', 'left');
        // $this->db->join('contacts', 'contacts.contact_id = job_card.contact_id', 'left');
        // $this->db->join('staff', 'staff.id = job_card.assigned_to', 'left');
        // $this->db->where('job_card.status', $this->status);
        // $result = $this->db->get();
        // $row = $result->row(0);
        // log_message('debug', $this->db->last_query());
        // log_message('debug', 'row count:' . $row->row_count);
        // return $row->row_count;
    // }
// 
    // /**
     // * Get prints for a job
     // * @param int $jobId
     // */
    // // function prints($jobId)
    // // {
    // // $sql = "SELECT id, mas_id, type, length, breath, units, format, print_type,
    // // material, laminate,	mounts, qty, printer, sqft_rate, unit_price,
    // // rate, amount, descr, thumb, image, file_path, printed_qty, status,
    // // finishing_status
    // // FROM `a8_job_prints`
    // // WHERE `mas_id`= ?
    // // ORDER BY `type` DESC, descr ASC";
    // // $query = $this->db->query($sql, $jobId);
    // // log_message('debug', $this->db->last_query());
    // // return $query->result();
    // // }
// 
    // /**
     // * Get prints for a job
     // * @param int $jobId
     // */
    // function prints($job_id)
    // {
        // $query = $this->db->get_where('job_prints', array('mas_id' => $job_id));
        // log_message('debug', $this->db->last_query());
        // return $query->result();
    // }
// 
    // /**
     // * Get products
     // * @param int job id
     // */
    // function products($mas_id)
    // {
        // $query = $this->db->query('SELECT a.*, b.id AS print_id, b.qty FROM a8_product a
		// LEFT JOIN a8_job_prints b ON b.`product_id`=a.id AND b.mas_id=?', array($mas_id));
        // log_message('debug', $this->db->last_query());
        // return $query->result();
    // }
// 
    // function getJob($params)
    // {
        // $sql = "SELECT j.`id`, j.`client_id`, j.`contact_id`, j.invoicing, j.payment_status,
				// con.name AS conname, con.phone AS conphone, c.full_name AS `client_name`,
                // c.company AS `client_company`, c.`contact_tel`, c.`notes` AS client_notes,
                // j.assigned_to, s.name AS `assigned_to_name`, UNIX_TIMESTAMP(`job_date`) AS `job_date`,
                // UNIX_TIMESTAMP(`due_date`) AS `due_date`, `due_time`, j.`notes`,
                // `thumb`, `image`, `file_path`, `status`, `balance`, `payment_total` , `sub_total`, invoice_no
                // FROM `a8_job_card` j
                // LEFT JOIN a8_staff s ON s.id=j.assigned_to
                // LEFT JOIN a8_client c ON c.id=j.client_id
                // LEFT JOIN a8_contacts con ON con.client_id=j.client_id
                // WHERE j.`id`=?";
        // $query = $this->db->query($sql, $params);
        // log_message('debug', $this->db->last_query());
        // return $query->row();
    // }
// 
    // function getList($criteria)
    // {
        // $this->db->distinct();
        // $this->db->select("job_card.id, client.company AS client,
        	// job_date, sub_total, payment.payment_date, contacts.name AS contact_name,
			// contacts.phone AS contact_tel, staff.name as assigned_to, job_card.notes,
			// job_card.invoice_no,job_details.cash_invoice_no");
        // $this->db->from('job_card');
        // $this->db->join('client', 'client.id = job_card.client_id', 'left');
        // $this->db->join('payment', 'payment.job_id = job_card.id', 'left');
        // $this->db->join('contacts', 'contacts.contact_id = job_card.contact_id', 'left');
        // $this->db->join('staff', 'staff.id = job_card.assigned_to', 'left');
        // $this->db->join('job_details', 'job_details.job_id = job_card.id', 'left');
        // $this->db->where('job_card.status', $this->status);
// 
        // foreach ($criteria->filters as $filter) {
            // $this->db->where($this->filters[$filter], $this->filterValues[$filter]);
        // }
// 
        // $sortBy = $this->sortList[$criteria->sortBy];
        // $this->db->order_by($sortBy, $criteria->direction);
        // $this->db->limit($criteria->perPage, $criteria->offset);
        // $query = $this->db->get();
        // log_message('debug', $this->db->last_query());
        // return $query->result();
    // }
// 
    // /**
     // * Deprecate
     // */
    // // function listing($where)
    // // {
    // // $this->db->order_by('job_date', 'desc');
    // // $this->db->limit(100);
    // // $this->db->join('client', 'client.id = job_card.client_id');
    // // $query = $this->db->get_where('job_card', $where);
    // // log_message('debug', $this->db->last_query());
    // // return $query->result();
    // // }
// 
    // /**
     // * Get job listing
     // */
    // function listing($filter)
    // {
        // $this->db->distinct();
        // $this->db->select("job_card.id, client.company as client,
        	// job_date, sub_total, payment.payment_date, contacts.name as contact_name,
			// contacts.phone as contact_tel, staff.name as assigned_to, job_card.notes,
			// job_card.invoice_no,job_details.cash_invoice_no");
        // $this->db->from('job_card');
        // $this->db->join('client', 'client.id = job_card.client_id', 'left');
        // $this->db->join('payment', 'payment.job_id = job_card.id', 'left');
        // $this->db->join('contacts', 'contacts.contact_id = job_card.contact_id', 'left');
        // $this->db->join('staff', 'staff.id = job_card.assigned_to', 'left');
        // $this->db->join('job_details', 'job_details.job_id = job_card.id', 'left');
        // if (count($filter->filters) > 0) {
            // $this->db->where($filter->filters);
        // }
        // $this->db->order_by($filter->sort_by, $filter->direction);
        // // $this->db->limit($filter->per_page, $filter->offset);
        // $query = $this->db->get();
        // log_message('debug', $this->db->last_query());
        // return $query->result();
    // }
// 
    // function save($job)
    // {
        // $this->db->update('job_card', $job, array('id' => $job['id']));
        // log_message('debug', $this->db->last_query());
        // return $this->db->affected_rows();
    // }
// 
    // /**
     // * Save print
     // */
    // public function save_print($print, $print_id = '')
    // {
        // if (empty($print_id)) {
            // $this->db->insert('job_prints', $print);
            // $print['id'] = $this->db->insert_id();
            // log_message('debug', $this->db->last_query());
        // } else {
            // $this->db->update('job_prints', $print, array('id' => $print_id));
            // log_message('debug', $this->db->last_query());
        // }
        // $upload_path = $this->config->item('upload_path');
        // $archive_path = $this->archive_path($print['mas_id']);
        // $archive_upload_path = $upload_path . '/' . $archive_path . '/';
        // $job_path = $upload_path . '/job/' . $print['mas_id'] . '/';
        // $upload_file = 'print.jpg';
        // $archive_file = 'job-' . $print['mas_id'] . '-print-' . $print_id . '.jpg';
        // if (file_exists($job_path . $upload_file)) {
            // if (!is_dir($archive_upload_path)) {
                // mkdir($archive_upload_path, 0755, TRUE);
            // }
            // rename($job_path . $upload_file, $archive_upload_path . $archive_file);
            // $print['thumb'] = $archive_path . '/' . $archive_file;
            // $this->db->update('job_prints', $print, array('id' => $print_id));
            // log_message('debug', $this->db->last_query());
        // }
        // return $print;
    // }
// 
    // function save_receipt_tax($payment_id, $data)
    // {
        // $this->db->where('id', $payment_id);
        // $this->db->update('payment', $data);
        // log_message('debug', $this->db->last_query());
    // }
// 
    // function search($fields)
    // {
        // $fields['sdate'] = db_date($fields['sdate']);
        // $fields['edate'] = db_date($fields['edate']);
// 
        // $this->db->distinct();
        // $this->db->select("a.id, a.job_date, a.assigned_to, a.sub_total,a.client_id,
				// b.company, c.name as assigned_to,
				// a.status, a.cash_invoice_no as invoice_no");
        // $this->db->from('a8_job_card a');
        // $this->db->join('a8_client b', 'b.id = a.client_id');
        // $this->db->join('a8_staff c', 'c.id = a.assigned_to');
        // $this->db->where('a.job_date >=', $fields['sdate']);
        // $this->db->where('a.job_date <', $fields['edate']);
// 
        // if (!empty($fields['staff']) && $fields['payment_types'][0] != 'all') {
            // $this->db->where('a.assigned_to', $fields['staff']);
            // $this->db->where_in('a.status', $fields['payment_types']);
            // $this->db->order_by('a.job_date', 'asc');
            // $query = $this->db->get();
// 
        // } else if (!empty($fields['staff']) && $fields['payment_types'][0] == 'all') {
            // $this->db->where('a.assigned_to', $fields['staff']);
            // $this->db->order_by('a.job_date', 'asc');
            // $query = $this->db->get();
        // } else if (empty($fields['staff']) && $fields['payment_types'][0] != 'all') {
            // $this->db->where_in('a.status', $fields['payment_types']);
            // $this->db->order_by('a.job_date', 'asc');
            // $query = $this->db->get();
        // } else {
            // $query = $this->db->get();
        // }
        // log_message('debug', $this->db->last_query());
        // return $query->result();
    // }
// 
    // function search_jobs($filter, $data)
    // {
        // log_message('info', "4 data assign to" . $data['assingto']);
// 
        // $this->db->distinct();
        // $this->db->select("job_card.id, client.company as client,
        	// job_date, sub_total, payment.payment_date, contacts.name as contact_name,
			// contacts.phone as contact_tel, staff.name as assigned_to, job_card.notes,
			// job_card.invoice_no,job_details.cash_invoice_no");
        // $this->db->from('job_card');
        // $this->db->join('client', 'client.id = job_card.client_id', 'left');
        // $this->db->join('payment', 'payment.job_id = job_card.id', 'left');
        // $this->db->join('contacts', 'contacts.contact_id = job_card.contact_id', 'left');
        // $this->db->join('staff', 'staff.id = job_card.assigned_to', 'left');
        // $this->db->join('job_details', 'job_details.job_id = job_card.id', 'left');
        // $this->db->like('a8_staff.`name`', $data['assingto']);
        // $this->db->like('client.company', $data['client']);
        // $this->db->like('contacts.name', $data['contact']);
        // $this->db->like('contacts.phone', $data['phone']);
        // if (!empty($data['price']))
            // $this->db->where('job_card.sub_total', $data['price']);
        // if (!empty($data['startdate']))
            // $this->db->where('job_card.job_date >=', $data['startdate']);
        // if (!empty($data['enddate']))
            // $this->db->where('job_card.job_date <=', $data['enddate']);
// 
        // $query = $this->db->get();
        // log_message('debug', $this->db->last_query());
        // return $query->result();
    // }
// 
    // function search_job_total($fields)
    // {
        // $fields['sdate'] = db_date($fields['sdate']);
        // $fields['edate'] = db_date($fields['edate']);
// 
        // $this->db->distinct();
        // $this->db->select(" sum(a.total) as total, count(*) as jobs ");
        // $this->db->from('a8_job_card a');
        // $this->db->join('a8_client b', 'b.id = a.client_id');
        // $this->db->join('a8_staff c', 'c.id = a.assigned_to');
        // $this->db->where('a.job_date >=', $fields['sdate']);
        // $this->db->where('a.job_date <', $fields['edate']);
// 
        // if (!empty($fields['staff']) && $fields['payment_types'][0] != 'all') {
            // $this->db->where('a.assigned_to', $fields['staff']);
            // $this->db->where_in('a.status', $fields['payment_types']);
            // $query = $this->db->get();
// 
        // } else if (!empty($fields['staff']) && $fields['payment_types'][0] == 'all') {
            // $this->db->where('a.assigned_to', $fields['staff']);
            // $query = $this->db->get();
        // } else if (empty($fields['staff']) && $fields['payment_types'][0] != 'all') {
            // $this->db->where_in('a.status', $fields['payment_types']);
            // $query = $this->db->get();
        // } else {
            // $query = $this->db->get();
        // }
// 
        // log_message('debug', $this->db->last_query());
        // $row = $query->row();
        // return $row;
    // }
// 
    // function search_cheque($cheque_no)
    // {
        // $sql = "SELECT a.id, a.job_date, a.assigned_to, a.sub_total,
			// b.company, c.name AS assigned_to,
			// a.status, a.cash_invoice_no AS invoice_no
			// FROM `a8_job_card` a
			// JOIN a8_client b ON b.id = a.client_id
			// JOIN a8_staff c ON c.id = a.assigned_to
			// JOIN a8_payment d ON d.job_id=a.id
			// WHERE d.cheque_no = ?";
        // $query = $this->db->query($sql, array($cheque_no));
        // log_message('debug', $this->db->last_query());
        // return $query->result();
    // }
// 
    // function search_cheque_total($cheque_no)
    // {
        // $sql = "SELECT sum(a.sub_total) AS total, count(*) AS jobs,
      // b.company, c.name AS assigned_to,
      // a.status, a.cash_invoice_no AS invoice_no
      // FROM `a8_job_card` a
      // JOIN a8_client b ON b.id = a.client_id
      // JOIN a8_staff c ON c.id = a.assigned_to
      // JOIN a8_payment d ON d.job_id=a.id
      // WHERE d.cheque_no = ?";
        // $query = $this->db->query($sql, array($cheque_no));
        // log_message('debug', $this->db->last_query());
        // return $query->row();
    // }
// 
// 
    // /**
     // * Get custom products
     // * @param int job id
     // */
    // function custom_products($job_id)
    // {
        // log_message('info', 'Custom products');
        // $query = $this->db->query('SELECT id AS print_id, product_id,
        // descr,unit_price,qty FROM a8_job_prints
        // WHERE mas_id = ? AND product_id IS NULL AND type = ?', array(
            // $job_id,
            // 'product'
        // ));
        // log_message('debug', $this->db->last_query());
        // return $query->result();
    // }
// 
    // /**
     // * Update quote total
     // *
     // */
    // function total($job_id)
    // {
        // $sql = 'SELECT sum(amount) AS total FROM `a8_job_prints` WHERE mas_id=?';
        // $query = $this->db->query($sql, array($job_id));
        // $total = $query->row('total');
        // log_message('debug', 'job total ' . $total);
        // log_message('debug', $this->db->last_query());
// 
        // $job = array();
        // $job['sub_total'] = $total;
        // $job['total'] = $total;
        // $job['balance'] = $total;
        // $this->db->update('job_card', $job, array('id' => $job_id));
        // log_message('debug', $this->db->last_query());
        // return $total;
    // }
// 
    // public function attach_print_sample($print)
    // {
        // $sub_dir = floor($print->id / 1000);
        // $new_file = $this->config->item('job_prints_dir') . $sub_dir . '/' . $print->id . '.jpg';
        // $old_file = $this->config->item('upload_dir') . '/print-thumbs/print-' . $print->id . '.jpg';
        // log_message('debug', 'old file ' . var_export($old_file, TRUE));
        // log_message('debug', 'new file ' . var_export($new_file, TRUE));
        // if (file_exists($old_file) or file_exists($new_file)) {
            // $print->sample = site_url('image/job_prints/' . $print->id);
        // }
        // return $print;
    // }
// 
    // public function update_totals($job_id, $sub_total, $payment_total, $payment_type = null)
    // {
        // $total = $sub_total;
        // $balance = $total - $payment_total;
// 
        // $status = 'pending';
        // if(in_array($payment_type, array('cash', 'cheque'))  && $balance > 0) {
            // $status = 'credit';
        // }
        // else {
            // $status = $payment_type;
        // }
// 
        // $job = array();
        // $job['sub_total'] = $sub_total;
        // $job['total'] = $total;
        // $job['balance'] = $balance;
        // $job['payment_total'] = $payment_total;
        // $job['status'] = $status;
        // $this->db->update('job_card', $job, array('id' => $job_id));
        // log_message('debug', $this->db->last_query());
    // }
//     
    // public function update_status($job_id,$payment_type,$invoice_no)
    // {
//         
        // $status = $payment_type;
        // $job = array();
        // $job['status'] = $status;
        // $this->db->update('job_card', $job, array('id' => $job_id));
        // log_message('debug', $this->db->last_query());
    // }
//     
    // public function update_payment_status($job_id,$payment_total,$sub_total)
    // {
        // $job = array();
        // if($payment_total >= $sub_total){
            // $job['payment_status'] = 'paid';
        // }elseif($payment_total >'0.00' &&  $sub_total > $payment_total){
            // $job['payment_status'] = 'partial';
        // }else{
            // $job['payment_status'] = 'pending';
        // }
        // $this->db->update('job_card', $job, array('id' => $job_id));
        // log_message('debug', $this->db->last_query());
    // }
//     
    // public function update_delete_status($job_id,$payment_total,$promo_total)
    // {
        // $job = array();
        // if(empty($payment_total) && empty($promo_total)){
            // $job['status'] = 'pending';
        // }elseif(empty($payment_total) &&  !empty($promo_total)){
            // $job['status'] = 'promo';
        // }else{
            // $job['status'] = 'credit';
        // }
            // $this->db->update('job_card', $job, array('id' => $job_id));
            // log_message('debug', $this->db->last_query());
    // }
    

} // Job model end
