<?php /* Smarty version 2.6.27, created on 2017-02-01 15:41:03
         compiled from CRM/Report/Page/InstanceList.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Report/Page/InstanceList.tpl', 1, false),array('block', 'ts', 'CRM/Report/Page/InstanceList.tpl', 32, false),array('function', 'counter', 'CRM/Report/Page/InstanceList.tpl', 37, false),array('modifier', 'json_encode', 'CRM/Report/Page/InstanceList.tpl', 56, false),array('modifier', 'htmlspecialchars', 'CRM/Report/Page/InstanceList.tpl', 56, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo '<div class="action-link">'; ?><?php if ($this->_tpl_vars['templateUrl']): ?><?php echo '<a href="'; ?><?php echo $this->_tpl_vars['templateUrl']; ?><?php echo '" class="button"><span><i class="crm-i fa-plus-circle"></i> '; ?><?php echo $this->_tpl_vars['newButton']; ?><?php echo '</span></a>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['reportUrl']): ?><?php echo '<a href="'; ?><?php echo $this->_tpl_vars['reportUrl']; ?><?php echo '" class="button"><span>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'View All Reports'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</span></a>'; ?><?php endif; ?><?php echo '</div>'; ?><?php if ($this->_tpl_vars['list']): ?><?php echo '<div class="crm-block crm-form-block crm-report-instanceList-form-block">'; ?><?php echo smarty_function_counter(array('start' => 0,'skip' => 1,'print' => false), $this);?><?php echo ''; ?><?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['report'] => $this->_tpl_vars['rows']):
?><?php echo '<div class="crm-accordion-wrapper crm-accordion_'; ?><?php echo $this->_tpl_vars['report']; ?><?php echo '-accordion "><div class="crm-accordion-header">'; ?><?php if ($this->_tpl_vars['title']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['title']; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['report'] == 'Contribute'): ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Contribution Reports'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo ''; ?><?php echo $this->_tpl_vars['report']; ?><?php echo ' Reports'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ''; ?><?php endif; ?><?php echo '</a></div><!-- /.crm-accordion-header --><div class="crm-accordion-body"><div id="'; ?><?php echo $this->_tpl_vars['report']; ?><?php echo '" class="boxBlock"><table class="report-layout">'; ?><?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?><?php echo '<tr id="row_'; ?><?php echo smarty_function_counter(array(), $this);?><?php echo '" class="crm-report-instanceList"><td class="crm-report-instanceList-title" style="width:35%"><a href="'; ?><?php echo $this->_tpl_vars['row']['url']; ?><?php echo '" title="'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Run this report'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '">&raquo; <strong>'; ?><?php echo $this->_tpl_vars['row']['title']; ?><?php echo '</strong></a></td><td class="crm-report-instanceList-description">'; ?><?php echo $this->_tpl_vars['row']['description']; ?><?php echo '</td><td><a href="'; ?><?php echo $this->_tpl_vars['row']['viewUrl']; ?><?php echo '" class="action-item crm-hover-button">'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'View Results'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</a><span class="btn-slide crm-hover-button">more<ul class="panel">'; ?><?php $_from = $this->_tpl_vars['row']['actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action_name'] => $this->_tpl_vars['action']):
?><?php echo '<li><a href="'; ?><?php echo $this->_tpl_vars['action']['url']; ?><?php echo '" class="'; ?><?php echo $this->_tpl_vars['action_name']; ?><?php echo ' action-item crm-hover-button small-popup"'; ?><?php if ($this->_tpl_vars['action']['confirm_message']): ?><?php echo 'onclick="return window.confirm('; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['action']['confirm_message'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)))) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?><?php echo ')"'; ?><?php endif; ?><?php echo 'title="'; ?><?php echo $this->_tpl_vars['action']['label']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['action']['label']; ?><?php echo '</a></li>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</ul></span></td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</table></div></div></div>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</div><div class="action-link">'; ?><?php if ($this->_tpl_vars['templateUrl']): ?><?php echo '<a href="'; ?><?php echo $this->_tpl_vars['templateUrl']; ?><?php echo '" class="button"><span><i class="crm-i fa-plus-circle"></i> '; ?><?php echo $this->_tpl_vars['newButton']; ?><?php echo '</span></a>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['reportUrl']): ?><?php echo '<a href="'; ?><?php echo $this->_tpl_vars['reportUrl']; ?><?php echo '" class="button"><span>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'View All Reports'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</span></a>'; ?><?php endif; ?><?php echo '</div>'; ?><?php else: ?><?php echo '<div class="crm-content-block"><div class="messages status no-popup"><div class="icon inform-icon"></div>&nbsp;'; ?><?php if ($this->_tpl_vars['myReports']): ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'You do not have any private reports. To add a report to this section, edit the Report Settings for a report and set \'Add to My Reports\' to Yes.'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ' &nbsp;'; ?><?php else: ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['compName'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'No %1 reports have been created.'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ' &nbsp;'; ?><?php if ($this->_tpl_vars['templateUrl']): ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['templateUrl'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'You can create reports by selecting from the <a href="%1">list of report templates here.</a>'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Contact your site administrator for help creating reports.'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '</div></div>'; ?><?php endif; ?><?php echo ''; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>