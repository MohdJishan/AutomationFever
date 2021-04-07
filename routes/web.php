<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BasicVbaController;
use App\Http\Controllers\AdvancedVbaController;
use App\Http\Controllers\ExcelTipsAndTricksController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', 'App\Http\Controllers\HomeController@RecentVideos')->name('home');

Route::post('basic-vba-recent-videos',[HomeController::class,'LoadBasicVbaRecentVideos'])->name('basic-vba-recent-videos');
Route::post('advanced-vba-recent-videos',[HomeController::class,'LoadAdvancedVbaRecentVideos'])->name('loadAdvancedVbaVideos');
Route::post('vba-projects-recent-videos',[HomeController::class,'LoadVbaProjectsRecentVideos'])->name('loadVbaProjectsVideos');
Route::post('excel-tips-and-tricks-recent-videos',[HomeController::class,'LoadExcelTipsAndTricksRecentVideos'])->name('loadExcelTipsAndTricksVideos');

Route::post('basic-vba-tutorials-list',[HomeController::class,'GetBasicVbaTutorialsList'])->name('basic-vba-tutorials-list');
Route::post('advanced-vba-tutorials-list',[HomeController::class,'GetAdvancedVbaTutorialsList'])->name('advanced-vba-tutorials-list');
Route::post('excel-tips-and-tricks-tutorials-list',[HomeController::class,'GetExcelTipsAndTricksTutorialsList'])->name('excel-tips-and-tricks-tutorials-list');


Route::post('/getRecentVideos',array('uses'=>'App\Http\Controllers\HomeController@GetRecentVideos','as'=>'getRecentVideos'));
Route::post('/getExcelVbaToturials',array('uses'=>'App\Http\Controllers\HomeController@GetExcelVbaToturials','as'=>'getExcelVbaToturials'));
Route::post('/getVbaLoops',array('uses'=>'App\Http\Controllers\HomeController@GetVbaLoops','as'=>'getVbaLoops'));
Route::post('/getTextToColumns',array('uses'=>'App\Http\Controllers\HomeController@GetTextToColumns','as'=>'getTextToColumns'));
Route::post('/getHyperlinks',array('uses'=>'App\Http\Controllers\HomeController@GetVbaHyperlinks','as'=>'getHyperlinks'));
Route::post('/getSorting',array('uses'=>'App\Http\Controllers\HomeController@GetVbaSorting','as'=>'getSorting'));
Route::post('/getVbaProjects',array('uses'=>'App\Http\Controllers\HomeController@GetVbaProject','as'=>'getVbaProjects'));

Route::get('/single/{video_id}', 'App\Http\Controllers\SingleController@ShowSingleVideo')->name('single');


Route::get('/view-all/{playlist_name}', 'App\Http\Controllers\HomeController@ViewAllViedeos')->name('view-all');
Route::get('/view-all-videos/{playlist_name}', 'App\Http\Controllers\HomeController@ViewAllChildPlaylist')->name('view-all-videos');
Route::get('/add_description', 'App\Http\Controllers\AddDescription@LoadVideosDetails')->name('add_description');
Route::post('/insert_video_description','App\Http\Controllers\AddDescription@InsertVideoDescription')->name('insert_video_description');

Route::post('/get-video-text-description',array('uses'=>'App\Http\Controllers\SingleController@GetVideoTextDescription','as'=>'get-video-text-description'));

Route::get('/contact-us','App\Http\Controllers\ContactUsController@GetContactUsPage')->name('contact-us');
Route::post('/send-contact-us','App\Http\Controllers\ContactUsController@ContactUsPost')->name('send-contact-us');

Route::get('/about-us','App\Http\Controllers\AboutUsController@GetAboutUs')->name('about-us');

Route::post('/user-sign-up','App\Http\Controllers\SignUpController@UserSignUp')->name('user-sign-up');
Route::get('/is-user-available',array('uses'=>'App\Http\Controllers\SignUpController@IsUserAvailable','as'=>'is-user-available'));


Route::post('/user-sign-in','App\Http\Controllers\SignUpController@UserSignIn')->name('user-sign-in');
Route::get('/user_existance',array('uses'=>'App\Http\Controllers\SignUpController@CheckUserExistance','as'=>'user_existance'));

Route::get('/logout', 'App\Http\Controllers\HomeController@Logout')->name('logout');

Route::get('login/google/', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);




Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);


Route::post('/videos-search','App\Http\Controllers\SearchController@SearchVideos')->name('videos-search');


Route::get('/copyright',function(){
    return view('copyright');
})->name('copyright');


Route::get('/privacy',function(){
    return view('privacy');
})->name('privacy');

Route::get('/terms',function(){
    return view('terms');
})->name('terms');


Route::post('post-comment','App\Http\Controllers\CommentsController@AddComment')->name('post.comment');

Route::post('post-comment-reply','App\Http\Controllers\CommentsController@ReplyComment')->name('post.comment.reply');

Route::post('view-comment-replies','App\Http\Controllers\SingleController@GetCommentReplies')->name('view-comment-replies');

Auth::routes();


//Baisc VBA Routes
Route::get('vba/basic-vba/why-should-learn-vba',
[BasicVbaController::class,'LoadWhyShouldLearnVba'])
->name('vba/basic-vba/why-should-learn-vba');

Route::get('/basic_vba/vba-introduction',
[BasicVbaController::class,'LoadVbaIntroduction'])
->name('/basic_vba/vba-introduction');

Route::get('/basic_vba/how-to-enable-developer-tab',
[BasicVbaController::class,'LoadHowToEnableDeveloperTab'])
->name('/basic_vba/how-to-enable-developer-tab');

Route::get('/basic_vba/message-box',
[BasicVbaController::class,'LoadMessageBox'])
->name('/basic_vba/message-box');

Route::get('/basic_vba/adding-new-sheets',
[BasicVbaController::class,'LoadAddingNewSheets'])
->name('/basic_vba/adding-new-sheets');

Route::get('/basic_vba/deleting-sheets',
[BasicVbaController::class,'LoadDeletingSheets'])
->name('/basic_vba/deleting-sheets');

Route::get('/basic_vba/change-sheet-tab-color',
[BasicVbaController::class,'LoadChangeSheetTabColor'])
->name('/basic_vba/change-sheet-tab-color');

Route::get('/basic_vba/hide-unhide-sheets',
[BasicVbaController::class,'LoadHideUnhideSheets'])
->name('/basic_vba/hide-unhide-sheets');

Route::get('/basic_vba/grouping-sheets',
[BasicVbaController::class,'LoadGroupingSheets'])
->name('/basic_vba/grouping-sheets');

Route::get('/basic_vba/copy-and-move-sheet',
[BasicVbaController::class,'LoadCopyAndMoveSheet'])
->name('/basic_vba/copy-and-move-sheet');

Route::get('/basic_vba/protect-and-unprotect-sheet',
[BasicVbaController::class,'LoadProtectAndUnprotectSheet'])
->name('/basic_vba/protect-and-unprotect-sheet');

Route::get('/basic_vba/add-background-image-in-sheet',
[BasicVbaController::class,'LoadAddBackgroundImageInSheet'])
->name('/basic_vba/add-background-image-in-sheet');

Route::get('/basic_vba/working-with-workbook',
[BasicVbaController::class,'LoadWorkingWithWorkbook'])
->name('/basic_vba/working-with-workbook');

Route::get('/basic_vba/subroutine',
[BasicVbaController::class,'LoadSubroutine'])
->name('/basic_vba/subroutine');

Route::get('/basic_vba/add-50-sheets-and-change-tab-color-of-each-sheets',
[BasicVbaController::class,'LoadAdd50SheetsAndChangeTabColorOfEachSheets'])
->name('/basic_vba/add-50-sheets-and-change-tab-color-of-each-sheets');

Route::get('/basic_vba/object-hierarchy',
[BasicVbaController::class,'LoadObjectHierarchy'])
->name('/basic_vba/object-hierarchy');

Route::get('/basic_vba/range',
[BasicVbaController::class,'LoadRange'])
->name('/basic_vba/range');

Route::get('/basic_vba/variables',
[BasicVbaController::class,'LoadVariables'])
->name('/basic_vba/variables');

Route::get('/basic_vba/if-else-statements',
[BasicVbaController::class,'LoadIfElseStatements'])
->name('/basic_vba/if-else-statements');

Route::get('/basic_vba/select-case-statement',
[BasicVbaController::class,'LoadSelectCaseStatement'])
->name('/basic_vba/select-case-statement');

Route::get('/basic_vba/for-loop',
[BasicVbaController::class,'LoadForLoop'])
->name('/basic_vba/for-loop');

Route::get('/basic_vba/for-loop-examples',
[BasicVbaController::class,'LoadForLoopExamples'])
->name('/basic_vba/for-loop-examples');

Route::get('/basic_vba/read-data-from-text-file',
[BasicVbaController::class,'LoadReadDataFromTextFile'])
->name('/basic_vba/read-data-from-text-file');

Route::get('/basic_vba/send-excel-file-in-mail',
[BasicVbaController::class,'LoadSendExcelFileInMail'])
->name('/basic_vba/send-excel-file-in-mail');

Route::get('/basic_vba/do-while-loop',
[BasicVbaController::class,'LoadDoWhileLoop'])
->name('/basic_vba/do-while-loop');

Route::get('/basic_vba/do-while-loop-examples',
[BasicVbaController::class,'LoadDoWhileLoopExamples'])
->name('/basic_vba/do-while-loop-examples');

Route::get('/basic_vba/for-each-loop',
[BasicVbaController::class,'LoadForEachLoop'])
->name('/basic_vba/for-each-loop');

Route::get('/basic_vba/hide-unhide-gridlines',
[BasicVbaController::class,'LoadHideUnhideGridlines'])
->name('/basic_vba/hide-unhide-gridlines');

Route::get('/basic_vba/merge-unmerge-cells',
[BasicVbaController::class,'LoadMergeUnmergeCells'])
->name('/basic_vba/merge-unmerge-cells');

Route::get('/basic_vba/auto-format',
[BasicVbaController::class,'LoadAutoFormat'])
->name('/basic_vba/auto-format');

Route::get('/basic_vba/remove-duplicates',
[BasicVbaController::class,'LoadRemoveDuplicates'])
->name('/basic_vba/remove-duplicates');

Route::get('/basic_vba/insert-rows',
[BasicVbaController::class,'LoadInsertRows'])
->name('/basic_vba/insert-rows');

Route::get('/basic_vba/insert-alternate-rows',
[BasicVbaController::class,'LoadInsertAlternateRows'])
->name('/basic_vba/insert-alternate-rows');

Route::get('/basic_vba/delete-rows',
[BasicVbaController::class,'LoadDeleteRows'])
->name('/basic_vba/delete-rows');

Route::get('/basic_vba/insert-new-column',
[BasicVbaController::class,'LoadInsertNewColumn'])
->name('/basic_vba/insert-new-column');

Route::get('/basic_vba/delete-column',
[BasicVbaController::class,'LoadDeleteColumn'])
->name('/basic_vba/delete-column');

Route::get('/basic_vba/vba-code-to-apply-text-to-columns-fixed-width',
[BasicVbaController::class,'LoadVbaCodeToApplyTextToColumnsFixedWidth'])
->name('/basic_vba/vba-code-to-apply-text-to-columns-fixed-width');

Route::get('/basic_vba/delimited-text-to-columns',
[BasicVbaController::class,'LoadDelimitedTextToColumns'])
->name('/basic_vba/delimited-text-to-columns');

Route::get('/basic_vba/advanced-text-to-columns-tricks',
[BasicVbaController::class,'LoadAdvancedTextToColumnsTricks'])
->name('/basic_vba/advanced-text-to-columns-tricks');

Route::get('/basic_vba/enable-disable-formula-bar',
[BasicVbaController::class,'LoadEnableDisableFormulaBar'])
->name('/basic_vba/enable-disable-formula-bar');

Route::get('/basic_vba/arrays',
[BasicVbaController::class,'LoadArrays'])
->name('/basic_vba/arrays');

Route::get('/basic_vba/hide-show-row-column-heading',
[BasicVbaController::class,'LoadHideShowRowColumnHeading'])
->name('/basic_vba/hide-show-row-column-heading');

Route::get('/basic_vba/dynamic-arrays',
[BasicVbaController::class,'LoadDynamicArrays'])
->name('/basic_vba/dynamic-arrays');

Route::get('/basic_vba/autofit-columns-width',
[BasicVbaController::class,'LoadAutofitColumnsWidth'])
->name('/basic_vba/autofit-columns-width');

Route::get('/basic_vba/with-statement',
[BasicVbaController::class,'LoadWithStatement'])
->name('/basic_vba/with-statement');

Route::get('/basic_vba/custom-list',
[BasicVbaController::class,'LoadCustomList'])
->name('/basic_vba/custom-list');

Route::get('/basic_vba/status-bar',
[BasicVbaController::class,'LoadStatusBar'])
->name('/basic_vba/status-bar');

Route::get('/basic_vba/finding-last-row-or-last-column',
[BasicVbaController::class,'LoadFindingLastRowOrLastColumn'])
->name('/basic_vba/finding-last-row-or-last-column');

Route::get('/basic_vba/hide-scroll-bar',
[BasicVbaController::class,'LoadHideScrollBar'])
->name('/basic_vba/hide-scroll-bar');

Route::get('/basic_vba/change-row-column-width-height',
[BasicVbaController::class,'LoadChangeRowColumnWidthHeight'])
->name('/basic_vba/change-row-column-width-height');

Route::get('/basic_vba/change-text-orientation',
[BasicVbaController::class,'LoadChangeTextOrientation'])
->name('/basic_vba/change-text-orientation');

Route::get('/basic_vba/insert-delete-edit-read-comments',
[BasicVbaController::class,'LoadInsertDeleteEditReadComments'])
->name('/basic_vba/insert-delete-edit-read-comments');

Route::get('/basic_vba/wrap-text',
[BasicVbaController::class,'LoadWrapText'])
->name('/basic_vba/wrap-text');

Route::get('/basic_vba/fill-down-option',
[BasicVbaController::class,'LoadFillDownOption'])
->name('/basic_vba/fill-down-option');

Route::get('/basic_vba/clear-cells',
[BasicVbaController::class,'LoadClearCells'])
->name('/basic_vba/clear-cells');

Route::get('/basic_vba/hide-unhide-sheet-tab-bar',
[BasicVbaController::class,'LoadHideUnhideSheetTabBar'])
->name('/basic_vba/hide-unhide-sheet-tab-bar');

Route::get('/basic_vba/excel-vba-activate-full-screen-mode',
[BasicVbaController::class,'LoadExcelVbaActivateFullScreenMode'])
->name('/basic_vba/excel-vba-activate-full-screen-mode');

Route::get('/basic_vba/immediate-window',
[BasicVbaController::class,'LoadImmediateWindow'])
->name('/basic_vba/immediate-window');

Route::get('/basic_vba/excel-vba-applying-borders',
[BasicVbaController::class,'LoadExcelVbaApplyingBorders'])
->name('/basic_vba/excel-vba-applying-borders');

Route::get('/basic_vba/adding-and-removing-hyperlinks',
[BasicVbaController::class,'LoadAddingAndRemovingHyperlinks'])
->name('/basic_vba/adding-and-removing-hyperlinks');

Route::get('/basic_vba/hyperlinks-add-text-to-display-add-screen-tip',
[BasicVbaController::class,'LoadHyperlinksAddTextToDisplayAddScreenTip'])
->name('/basic_vba/hyperlinks-add-text-to-display-add-screen-tip');

Route::get('/basic_vba/hyperlinks-open-folder-file-jump-to-a-cell',
[BasicVbaController::class,'LoadHyperlinksOpenFolderFileJumpToACell'])
->name('/basic_vba/hyperlinks-open-folder-file-jump-to-a-cell');

Route::get('/basic_vba/follow-hyperlinks',
[BasicVbaController::class,'LoadFollowHyperlinks'])
->name('/basic_vba/follow-hyperlinks');

Route::get('/basic_vba/excel-vba-display-hyperlinks-add-hyperlinks-to-a-shape',
[BasicVbaController::class,'LoadExcelVbaDisplayHyperlinksAddHyperlinksToAShape'])
->name('/basic_vba/excel-vba-display-hyperlinks-add-hyperlinks-to-a-shape');

Route::get('/basic_vba/using-freeze-panes',
[BasicVbaController::class,'LoadUsingFreezePanes'])
->name('/basic_vba/using-freeze-panes');

Route::get('/basic_vba/basic-sorting',
[BasicVbaController::class,'LoadBasicSorting'])
->name('/basic_vba/basic-sorting');

Route::get('/basic_vba/multi-level-sorting',
[BasicVbaController::class,'LoadMultiLevelSorting'])
->name('/basic_vba/multi-level-sorting');

Route::get('/basic_vba/sort-by-font-and-cell-color',
[BasicVbaController::class,'LoadSortByFontAndCellColor'])
->name('/basic_vba/sort-by-font-and-cell-color');

Route::get('/basic_vba/horizontal-sorting',
[BasicVbaController::class,'LoadHorizontalSorting'])
->name('/basic_vba/horizontal-sorting');

Route::get('/basic_vba/auto-filter',
[BasicVbaController::class,'LoadAutoFilter'])
->name('/basic_vba/auto-filter');

Route::get('/basic_vba/auto-filter-using-wildcard',
[BasicVbaController::class,'LoadAutoFilterUsingWildcard'])
->name('/basic_vba/auto-filter-using-wildcard');

Route::get('/basic_vba/auto-filter-top-bottom-records',
[BasicVbaController::class,'LoadAutoFilterTopBottomRecords'])
->name('/basic_vba/auto-filter-top-bottom-records');

Route::get('/basic_vba/auto-filter-by-dates',
[BasicVbaController::class,'LoadAutoFilterByDates'])
->name('/basic_vba/auto-filter-by-dates');

Route::get('/basic_vba/auto-filter-by-color',
[BasicVbaController::class,'LoadAutoFilterByColor'])
->name('/basic_vba/auto-filter-by-color');

Route::get('/basic_vba/filter-unique-records-using-advanced-filter',
[BasicVbaController::class,'LoadFilterUniqueRecordsUsingAdvancedFilter'])
->name('/basic_vba/filter-unique-records-using-advanced-filter');

Route::get('/basic_vba/advanced-filter',
[BasicVbaController::class,'LoadAdvancedFilter'])
->name('/basic_vba/advanced-filter');

Route::get('/basic_vba/advanced-filter-with-multiple-criteria',
[BasicVbaController::class,'LoadAdvancedFilterWithMultipleCriteria'])
->name('/basic_vba/advanced-filter-with-multiple-criteria');

Route::get('/basic_vba/string-functions',
[BasicVbaController::class,'LoadStringFunctions'])
->name('/basic_vba/string-functions');

Route::get('/basic_vba/left-right-mid-functions',
[BasicVbaController::class,'LoadLeftRightMidFunctions'])
->name('/basic_vba/left-right-mid-functions');

Route::get('/basic_vba/extract-numbers-text-special-chars-from-a-string',
[BasicVbaController::class,'LoadExtractNumbersTextSpecialCharsFromAString'])
->name('/basic_vba/extract-numbers-text-special-chars-from-a-string');

Route::get('/basic_vba/asc-chr-trim-string-functions',
[BasicVbaController::class,'LoadAscChrTrimStringFunctions'])
->name('/basic_vba/asc-chr-trim-string-functions');

Route::get('/basic_vba/searching-with-in-a-string',
[BasicVbaController::class,'LoadSearchingWithInAString'])
->name('/basic_vba/searching-with-in-a-string');

Route::get('/basic_vba/replace-a-part-of-string',
[BasicVbaController::class,'LoadReplaceAPartOfString'])
->name('/basic_vba/replace-a-part-of-string');

Route::get('/vba_projects/upload-insert-images',
[BasicVbaController::class,'LoadVba_ProjectsUploadInsertImages'])
->name('/vba_projects/upload-insert-images');

Route::get('/basic_vba/splitting-string-into-array',
[BasicVbaController::class,'LoadSplittingStringIntoArray'])
->name('/basic_vba/splitting-string-into-array');

Route::get('/vba_projects/split-data-into-multiple-sheets',
[BasicVbaController::class,'LoadVba_ProjectsSplitDataIntoMultipleSheets'])
->name('/vba_projects/split-data-into-multiple-sheets');

Route::get('/basic_vba/date-time-now-date-functions',
[BasicVbaController::class,'LoadDateTimeNowDateFunctions'])
->name('/basic_vba/date-time-now-date-functions');

Route::get('/basic_vba/format-date',
[BasicVbaController::class,'LoadFormatDate'])
->name('/basic_vba/format-date');

Route::get('/basic_vba/open-vb-editor-on-custom-button-click',
[BasicVbaController::class,'LoadOpenVbEditorOnCustomButtonClick'])
->name('/basic_vba/open-vb-editor-on-custom-button-click');

Route::get('/basic_vba/assign-value-to-date-variables',
[BasicVbaController::class,'LoadAssignValueToDateVariables'])
->name('/basic_vba/assign-value-to-date-variables');

Route::get('/basic_vba/datepart-function',
[BasicVbaController::class,'LoadDatepartFunction'])
->name('/basic_vba/datepart-function');

Route::get('/basic_vba/dateadd-function',
[BasicVbaController::class,'LoadDateaddFunction'])
->name('/basic_vba/dateadd-function');

Route::get('/basic_vba/datediff-function',
[BasicVbaController::class,'LoadDatediffFunction'])
->name('/basic_vba/datediff-function');

Route::get('/basic_vba/get-max-number',
[BasicVbaController::class,'LoadGetMaxNumber'])
->name('/basic_vba/get-max-number');

Route::get('/basic_vba/protect-vba-project-with-password',
[BasicVbaController::class,'LoadProtectVbaProjectWithPassword'])
->name('/basic_vba/protect-vba-project-with-password');

Route::get('/basic_vba/weekday-weekdayname-date-functions',
[BasicVbaController::class,'LoadWeekdayWeekdaynameDateFunctions'])
->name('/basic_vba/weekday-weekdayname-date-functions');

Route::get('/advanced_vba/send-outlook-mail',
[AdvancedVbaController::class,'LoadSendOutlookMail'])
->name('/advanced_vba/send-outlook-mail');

Route::get('/advanced_vba/format-email-body-outlook-automation',
[AdvancedVbaController::class,'LoadFormatEmailBodyOutlookAutomation'])
->name('/advanced_vba/format-email-body-outlook-automation');

Route::get('/advanced_vba/add-signature-outlook-automation',
[AdvancedVbaController::class,'LoadAddSignatureOutlookAutomation'])
->name('/advanced_vba/add-signature-outlook-automation');

Route::get('/advanced_vba/add-attachment-in-mail-outlook-automation',
[AdvancedVbaController::class,'LoadAddAttachmentInMailOutlookAutomation'])
->name('/advanced_vba/add-attachment-in-mail-outlook-automation');

Route::get('/advanced_vba/insert-image-in-mail-outlook-automation',
[AdvancedVbaController::class,'LoadInsertImageInMailOutlookAutomation'])
->name('/advanced_vba/insert-image-in-mail-outlook-automation');

Route::get('/advanced_vba/add-list-on-mail-outlook-automation',
[AdvancedVbaController::class,'LoadAddListOnMailOutlookAutomation'])
->name('/advanced_vba/add-list-on-mail-outlook-automation');

Route::get('/excel_tips_and_tricks/copy-from-clipboard-excel-tips-tricks',
[ExcelTipsAndTricksController::class,'LoadCopyFromClipboardExcelTipsTricks'])
->name('/excel_tips_and_tricks/copy-from-clipboard-excel-tips-tricks');

Route::get('/excel_tips_and_tricks/add-bullet-point-excel-tips-tricks',
[ExcelTipsAndTricksController::class,'LoadAddBulletPointExcelTipsTricks'])
->name('/excel_tips_and_tricks/add-bullet-point-excel-tips-tricks');

Route::get('/advanced_vba/add-unordered-list-on-mail-outlook-automation',
[ExcelTipsAndTricksController::class,'LoadAddUnorderedListOnMailOutlookAutomation'])
->name('/advanced_vba/add-unordered-list-on-mail-outlook-automation');

Route::get('/advanced_vba/using-rtf-property-outlook-automation',
[ExcelTipsAndTricksController::class,'LoadUsingRtfPropertyOutlookAutomation'])
->name('/advanced_vba/using-rtf-property-outlook-automation');



//end of basic
//     Route::get('/basic-vba/vba-introduction',
//                  'App\Http\Controllers\BasicVbaController@LoadVbaIntroduction')
//                  ->name('/basic-vba/vba-introduction');

// Route::get('/basic-vba/enable-developer-tab', 
//                 'App\Http\Controllers\BasicVbaController@LoadEnableDeveloperTab')
//                 ->name('/basic-vba/enable-developer-tab');

Route::get('/single/{video_id}', 
                    'App\Http\Controllers\SingleController@ShowSingleVideo')
                    ->name('single');

Route::post('video-comment',
            'App\Http\Controllers\SingleController@GetVideoComments')
            ->name('user.video.comment');

Route::post('video-comment-count',
            'App\Http\Controllers\SingleController@GetCommentsCount')
            ->name('user.video.comment.count');

Route::post('next-video-suggestion',
            'App\Http\Controllers\SingleController@GetNextVideo')
            ->name('next-video-suggestion');