<?php
/**
 * @file
 * Contains testdrupal\web\modules\custom\Form\ResumeForm.
 */
namespace testdrupal\web\modules\custom\Form\ResumeForm;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
class ResumeForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'resume_form';
  }