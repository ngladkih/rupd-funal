<?php

namespace app\controllers;

use app\models\Competence;
use app\models\Department;
use app\models\Document;
use app\models\Found;
use app\models\Independent;
use app\models\Institute;
use app\models\Laboratory;
use app\models\Lectures;
use app\models\Practical;
use app\models\Source;
use app\models\Subject;
use app\models\Teacher;
use app\models\Theme;
use Yii;
use yii\filters\AccessControl;
use yii\web\ConflictHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\helpers\ArrayHelper;
use yii\web\HttpException;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new Document();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->redirect(["site/document/?code={$model->code}"]);
        }
        return $this->render('index', compact('model'));
    }

    public function actionCreateDiscipline()
    {
        $subject = new Subject();
        if ($subject->load(Yii::$app->request->post())) {
            if ($subject->save()) {
                return $this->refresh();
            }
        }
        return $this->render('create-discipline', compact('subject'));
    }

    public function actionAddTheme()
    {
        $theme = new Theme();
        if ($theme->load(Yii::$app->request->post()) && $theme->save()) {
            return $this->refresh();
        }
        return $this->render('add-theme', compact('theme'));
    }

    public function actionAddList($type)
    {
        $model = null;
        $title = '';
        switch ($type):
            case 'lect':
                $model = new Lectures();
                $title = 'лекционных';
                $array = $this->addList($model, $type);
                break;
            case 'lab':
                $model = new Laboratory();
                $title = 'лабораторных';
                $array = $this->addList($model, $type);
                break;
            case 'pract':
                $model = new Practical();
                $title = 'практических';
                $array = $this->addList($model, $type);
                break;
            case 'iw':
                $model = new Independent();
                $title = 'самостоятельных';
                $array = $this->addList($model, $type);
                break;
        endswitch;
        return $this->render('add-list', compact('array', 'model', 'title'));
    }

    public function actionFund()
    {
        $model = new Found();
        if (!$model) throw new HttpException(404, 'Error');
        $theme = Theme::find()->with('subject')->all();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->set('theme', $model->theme_id);
            $this->refresh();
        }
        $array = [];
        $i = 1;
        foreach ($theme as $th):
            $array [$th->subject->name][$th->id] = $th->title;
        endforeach;
        
        return $this->render('fund', compact('array', 'model'));
    }

    public function actionSource()
    {
        $model = new Source();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->refresh();
        }
        return $this->render('source', compact('model'));
    }

    private function addList($model, $type)
    {
        if (!$model) throw new HttpException(404, 'Error');
        $theme = Theme::find()->with('subject')->all();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $themeCurrent = Theme::findOne($model->theme_id);
            $themeCurrent->$type =$themeCurrent->$type - 1;
            $themeCurrent->save();
            Yii::$app->session->set('theme', $model->theme_id);
            $this->refresh();
        }
        $array = [];
        $i = 1;
        foreach ($theme as $th):
            $array [$th->subject->name][$th->id] = $th->title;
        endforeach;
        return $array;
    }
    public function actionDocument($code)
    {
        $subject = Subject::findOne(['code' => $code]);
        $themes = Theme::find()->where(['subject_code' => $code])
            ->with('lectures', 'laboratory', 'practical', 'independent', 'found')->all();
        $sources = Source::find()->where(['subject_code'=>$code])->all();
        $tasks = explode(';', $subject->tasks);
        $know = explode(';', $subject->know);
        $can = explode(';', $subject->can);
        $own = explode(';', $subject->own);
        return $this->render('document',
            compact('subject', 'sources', 'themes', 'tasks', 'know', 'can', 'own', 'features'));
    }

    public function actionDelete()
    {
        echo 'Delete';
    }

    public function actionListHour()
    {
        $themeId = Yii::$app->request->post('themeId');
        $type = Yii::$app->request->post('type');
        $theme = Theme::findOne(['id'=>$themeId]);
        $hours = $theme->$type;
        return $hours;
    }
}
