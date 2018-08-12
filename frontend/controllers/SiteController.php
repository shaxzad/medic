<?php
namespace frontend\controllers;

use Yii;
use frontend\models\ContactForm;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction'
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null
            ],
            'set-locale'=>[
                'class'=>'common\actions\SetLocaleAction',
                'locales'=>array_keys(Yii::$app->params['availableLocales'])
            ]
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAboutus()
    {
        return $this->render('aboutus');
    }

    public function actionAccreditations()
    {
        return $this->render('accreditations');
    }


    // these actions for join us tab in navbar start here
    public function actionOverview()
    {
        return $this->render('overview');
    }
    public function actionQatrization()
    {
        return $this->render('qatrization');
    }
    public function actionEduTraining()
    {
        return $this->render('edu-training');
    }   
    public function actionStaffTestimonial()
    {
        return $this->render('staff_testimonial');
    }
    public function actionOppertunitesWork()
    {
        return $this->render('oppertunites_work');
    }
    // these actions for join us tab in navbar end here
    
    public function actionHealthCare()
    {
        return $this->render('health_care');
    }

    public function actionHmcVendors()
    {
        return $this->render('hmc_vendors');
    }

    public function actionOurOrganization()
    {
        return $this->render('our-organization');
    }
    public function actionOurPeople()
    {
        return $this->render('our-people');
    }
    public function actionStarsExcelence()
    {
        return $this->render('stars-of-excelence');
    }
    public function actionFindMore()
    {
        return $this->render('find-out-more');
    }
    public function actionOurPartners()
    {
        return $this->render('our-partners');
    }

    public function actionAcadmicSystem()
    {
        return $this->render('acadmic-system');
    }
    public function actionMedicalEducation()
    {
        return $this->render('medical-education');
    }
    public function actionMedicalReserch()
    {
        return $this->render('medical-reserch');
    }
    public function actionTranslationReserch()
    {
        return $this->render('translation-reserch');
    }
    public function actionHamadTrainingCenter()
    {
        return $this->render('hamad-training-center');
    }



    public function actionAlKhorHospital()
    {
        return $this->render('al-khor-hospital');
    }
    public function actionAlWakraHospital()
    {
        return $this->render('al-wakra-hospital');
    }
    public function actionAmbulatoryCareCenter()
    {
        return $this->render('ambulatory-care-center');
    }
    public function actionCommunicableDiseaseCenter()
    {
        return $this->render('communicable-disease-center');
    }
    public function actionHamadGeneralHospital()
    {
        return $this->render('hamad-general-hospital');
    }
    public function actionHeartHospital()
    {
        return $this->render('heart-hospital');
    }
    public function actionNcccr()
    {
        return $this->render('ncccr');
    }
    public function actionQatarMetabolicInstitute()
    {
        return $this->render('qatar-metabolic-institute');
    }
    public function actionQatarRehabilitationInstitute()
    {
        return $this->render('qatar-rehabilitation-institute');
    }
    public function actionRumailahHospital()
    {
        return $this->render('rumailah-hospital');
    }
    public function actionCubanHospital()
    {
        return $this->render('cuban-hospital');
    }
    public function actionWomensHospital()
    {
        return $this->render('womens-hospital');
    }
    public function actionWomenReserchCenter()
    {
        return $this->render('women-reserch-center');
    }
    public function actionContinuingCare()
    {
        return $this->render('continuing-care');
    }
    public function actionTabaccoControlCenter()
    {
        return $this->render('tabacco-control-center');
    }


    public function actionEnyaSpecializedCare()
    {
        return $this->render('enya-specialized-care');
    }
    public function actionExpansionPlus()
    {
        return $this->render('expansion-plus');
    }
    public function actionMedicalAffairsOffic()
    {
        return $this->render('medical-affairs-offic');
    }
    public function actionNursing()
    {
        return $this->render('nursing');
    }

    public function actionPecs()
    {
        return $this->render('pecs');
    }




    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->contact(Yii::$app->params['adminEmail'])) {
                Yii::$app->getSession()->setFlash('alert', [
                    'body'=>Yii::t('frontend', 'Thank you for contacting us. We will respond to you as soon as possible.'),
                    'options'=>['class'=>'alert-success']
                ]);
                return $this->refresh();
            } else {
                Yii::$app->getSession()->setFlash('alert', [
                    'body'=>\Yii::t('frontend', 'There was an error sending email.'),
                    'options'=>['class'=>'alert-danger']
                ]);
            }
        }

        return $this->render('contact', [
            'model' => $model
        ]);
    }
}
