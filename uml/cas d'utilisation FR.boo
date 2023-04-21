<?xml version="1.0" encoding="UTF-8"?>
<?PowerDesigner AppLocale="UTF16" ID="{64A33D25-A238-41D6-9948-F49ECE41EB5F}" Label="" LastModificationDate="1681834890" Name="Définition de cas d&#39;utilisation_1" Objects="9" Symbols="139" Target="Java" TargetLink="Reference" Type="{18112060-1A4B-11D1-83D9-444553540000}" signature="CLD_OBJECT_MODEL" version="15.1.0.2850"?>
<!-- Veuillez ne pas modifier ce fichier -->

<Model xmlns:a="attribute" xmlns:c="collection" xmlns:o="object">

<o:RootObject Id="o1">
<c:Children>
<o:Model Id="o2">
<a:ObjectID>64A33D25-A238-41D6-9948-F49ECE41EB5F</a:ObjectID>
<a:Name>Définition de cas d&#39;utilisation_1</a:Name>
<a:Code>Definition_de_cas_d_utilisation_1</a:Code>
<a:CreationDate>1681826949</a:CreationDate>
<a:Creator>Youcode</a:Creator>
<a:ModificationDate>1681827251</a:ModificationDate>
<a:Modifier>Youcode</a:Modifier>
<a:PackageOptionsText>[FolderOptions]

[FolderOptions\Class Diagram Objects]
GenerationCheckModel=Yes
GenerationPath=
GenerationOptions=
GenerationTasks=
GenerationTargets=
GenerationSelections=</a:PackageOptionsText>
<a:ModelOptionsText>[ModelOptions]

[ModelOptions\Cld]
CaseSensitive=Yes
DisplayName=Yes
EnableTrans=Yes
EnableRequirements=No
ShowClss=No
DeftAttr=int
DeftMthd=int
DeftParm=int
DeftCont=java.util.Collection
DomnDttp=Yes
DomnChck=No
DomnRule=No
SupportDelay=No
PreviewEditable=Yes
AutoRealize=No
DttpFullName=Yes
DeftClssAttrVisi=private
VBNetPreprocessingSymbols=
CSharpPreprocessingSymbols=

[ModelOptions\Cld\NamingOptionsTemplates]

[ModelOptions\Cld\ClssNamingOptions]

[ModelOptions\Cld\ClssNamingOptions\CLDPCKG]

[ModelOptions\Cld\ClssNamingOptions\CLDPCKG\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDPCKG\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDDOMN]

[ModelOptions\Cld\ClssNamingOptions\CLDDOMN\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDDOMN\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDCLASS]

[ModelOptions\Cld\ClssNamingOptions\CLDCLASS\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,FirstUpperChar)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDCLASS\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDINTF]

[ModelOptions\Cld\ClssNamingOptions\CLDINTF\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,FirstUpperChar)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDINTF\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDACTR]

[ModelOptions\Cld\ClssNamingOptions\UCDACTR\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDACTR\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDUCAS]

[ModelOptions\Cld\ClssNamingOptions\UCDUCAS\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDUCAS\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDOBJT]

[ModelOptions\Cld\ClssNamingOptions\SQDOBJT\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDOBJT\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDMSSG]

[ModelOptions\Cld\ClssNamingOptions\SQDMSSG\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDMSSG\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CPDCOMP]

[ModelOptions\Cld\ClssNamingOptions\CPDCOMP\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,FirstUpperChar)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CPDCOMP\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDATTR]

[ModelOptions\Cld\ClssNamingOptions\CLDATTR\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDATTR\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDMETHOD]

[ModelOptions\Cld\ClssNamingOptions\CLDMETHOD\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDMETHOD\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDPARM]

[ModelOptions\Cld\ClssNamingOptions\CLDPARM\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDPARM\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPORT]

[ModelOptions\Cld\ClssNamingOptions\OOMPORT\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPORT\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPART]

[ModelOptions\Cld\ClssNamingOptions\OOMPART\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPART\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDASSC]

[ModelOptions\Cld\ClssNamingOptions\CLDASSC\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,,,firstLowerWord)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDASSC\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDASSC]

[ModelOptions\Cld\ClssNamingOptions\UCDASSC\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDASSC\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\GNRLLINK]

[ModelOptions\Cld\ClssNamingOptions\GNRLLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\GNRLLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RQLINK]

[ModelOptions\Cld\ClssNamingOptions\RQLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RQLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RLZSLINK]

[ModelOptions\Cld\ClssNamingOptions\RLZSLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RLZSLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DEPDLINK]

[ModelOptions\Cld\ClssNamingOptions\DEPDLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DEPDLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMACTV]

[ModelOptions\Cld\ClssNamingOptions\OOMACTV\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMACTV\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\ACDOBST]

[ModelOptions\Cld\ClssNamingOptions\ACDOBST\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\ACDOBST\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\STAT]

[ModelOptions\Cld\ClssNamingOptions\STAT\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\STAT\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDNODE]

[ModelOptions\Cld\ClssNamingOptions\DPDNODE\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDNODE\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDCMPI]

[ModelOptions\Cld\ClssNamingOptions\DPDCMPI\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDCMPI\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDASSC]

[ModelOptions\Cld\ClssNamingOptions\DPDASSC\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDASSC\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMVAR]

[ModelOptions\Cld\ClssNamingOptions\OOMVAR\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMVAR\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FILO]

[ModelOptions\Cld\ClssNamingOptions\FILO\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=&quot;\/:*?&lt;&gt;|&quot;
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FILO\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_. &quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMEOBJ]

[ModelOptions\Cld\ClssNamingOptions\FRMEOBJ\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMEOBJ\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMELNK]

[ModelOptions\Cld\ClssNamingOptions\FRMELNK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMELNK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DefaultClass]

[ModelOptions\Cld\ClssNamingOptions\DefaultClass\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DefaultClass\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; &#39;(.)+=*/&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Generate]

[ModelOptions\Generate\Cdm]
CheckModel=Yes
SaveLinks=Yes
NameToCode=No
Notation=2

[ModelOptions\Generate\Pdm]
CheckModel=Yes
SaveLinks=Yes
ORMapping=No
NameToCode=No
BuildTrgr=No
TablePrefix=
RefrUpdRule=RESTRICT
RefrDelRule=RESTRICT
IndxPKName=%TABLE%_PK
IndxAKName=%TABLE%_AK
IndxFKName=%REFR%_FK
IndxThreshold=
ColnFKName=%.3:PARENT%_%COLUMN%
ColnFKNameUse=No

[ModelOptions\Generate\Xsm]
CheckModel=Yes
SaveLinks=Yes
ORMapping=No
NameToCode=No</a:ModelOptionsText>
<c:ObjectLanguage>
<o:Shortcut Id="o3">
<a:ObjectID>C0C7A9BD-908B-43CB-B819-3EA7032C8AF4</a:ObjectID>
<a:Name>Java</a:Name>
<a:Code>Java</a:Code>
<a:CreationDate>1681826949</a:CreationDate>
<a:Creator>Youcode</a:Creator>
<a:ModificationDate>1681826949</a:ModificationDate>
<a:Modifier>Youcode</a:Modifier>
<a:TargetStereotype/>
<a:TargetID>0DEDDB90-46E2-45A0-886E-411709DA0DC9</a:TargetID>
<a:TargetClassID>1811206C-1A4B-11D1-83D9-444553540000</a:TargetClassID>
</o:Shortcut>
</c:ObjectLanguage>
<c:ExtendedModelDefinitions>
<o:Shortcut Id="o4">
<a:ObjectID>FAA7529D-028B-4D4F-AED2-83D802FD5BC3</a:ObjectID>
<a:Name>WSDL for Java</a:Name>
<a:Code>WSDLJava</a:Code>
<a:CreationDate>1681826951</a:CreationDate>
<a:Creator>Youcode</a:Creator>
<a:ModificationDate>1681826951</a:ModificationDate>
<a:Modifier>Youcode</a:Modifier>
<a:TargetStereotype/>
<a:TargetID>C8F5F7B2-CF9D-4E98-8301-959BB6E86C8A</a:TargetID>
<a:TargetClassID>186C8AC3-D3DC-11D3-881C-00508B03C75C</a:TargetClassID>
</o:Shortcut>
</c:ExtendedModelDefinitions>
<c:DefaultDiagram>
<o:UseCaseDiagram Ref="o5"/>
</c:DefaultDiagram>
<c:UseCaseDiagrams>
<o:UseCaseDiagram Id="o5">
<a:ObjectID>EDD49F10-AA29-49A7-9E17-B4C910A010E7</a:ObjectID>
<a:Name>DiagrammeCasUtilisation_1</a:Name>
<a:Code>DiagrammeCasUtilisation_1</a:Code>
<a:CreationDate>1681826949</a:CreationDate>
<a:Creator>Youcode</a:Creator>
<a:ModificationDate>1681834755</a:ModificationDate>
<a:Modifier>Youcode</a:Modifier>
<a:DisplayPreferences>[DisplayPreferences]

[DisplayPreferences\UCD]

[DisplayPreferences\General]
Adjust to text=Yes
Snap Grid=No
Constrain Labels=Yes
Display Grid=No
Show Page Delimiter=Yes
Grid size=0
Graphic unit=2
Window color=255, 255, 255
Background image=
Background mode=8
Watermark image=
Watermark mode=8
Show watermark on screen=No
Gradient mode=0
Gradient end color=255, 255, 255
Show Swimlane=No
SwimlaneVert=Yes
TreeVert=No
CompDark=0

[DisplayPreferences\Object]
Mode=0
Trunc Length=80
Word Length=80
Word Text=!&quot;&quot;#$%&amp;&#39;()*+,-./:;&lt;=&gt;?@[\]^_`{|}~
Shortcut IntIcon=Yes
Shortcut IntLoct=Yes
Shortcut IntFullPath=No
Shortcut IntLastPackage=Yes
Shortcut ExtIcon=Yes
Shortcut ExtLoct=No
Shortcut ExtFullPath=No
Shortcut ExtLastPackage=Yes
Shortcut ExtIncludeModl=Yes
EObjShowStrn=Yes
ExtendedObject.Comment=No
ExtendedObject.IconPicture=No
ExtendedObject_SymbolLayout=
ELnkShowStrn=Yes
ELnkShowName=Yes
ExtendedLink_SymbolLayout=
FileObject.Stereotype=No
FileObject.DisplayName=Yes
FileObject.LocationOrName=No
FileObject.IconPicture=No
FileObject.IconMode=Yes
FileObject_SymbolLayout=
PckgShowStrn=Yes
Package.Comment=No
Package.IconPicture=No
Package_SymbolLayout=
Display Model Version=Yes
Actor.IconPicture=No
Actor_SymbolLayout=
UseCase.Stereotype=Yes
UseCase.Comment=No
UseCase.IconPicture=No
UseCase_SymbolLayout=&lt;Form&gt;[CRLF] &lt;StandardAttribute Name=&quot;Stéréotype&quot; Attribute=&quot;Stereotype&quot; Prefix=&quot;&amp;lt;&amp;lt;&quot; Suffix=&quot;&amp;gt;&amp;gt;&quot; Alignment=&quot;CNTR&quot; Caption=&quot;&quot; Mandatory=&quot;No&quot; /&gt;[CRLF] &lt;StandardAttribute Name=&quot;Nom&quot; Attribute=&quot;DisplayName&quot; Prefix=&quot;&quot; Suffix=&quot;&quot; Alignment=&quot;CNTR&quot; Caption=&quot;&quot; Mandatory=&quot;Yes&quot; /&gt;[CRLF] &lt;Separator Name=&quot;Séparateur&quot; /&gt;[CRLF] &lt;StandardAttribute Name=&quot;Commentaire&quot; Attribute=&quot;Comment&quot; Prefix=&quot;&quot; Suffix=&quot;&quot; Alignment=&quot;LEFT&quot; Caption=&quot;&quot; Mandatory=&quot;No&quot; /&gt;[CRLF] &lt;StandardAttribute Name=&quot;Icône&quot; Attribute=&quot;IconPicture&quot; Prefix=&quot;&quot; Suffix=&quot;&quot; Alignment=&quot;CNTR&quot; Caption=&quot;&quot; Mandatory=&quot;Yes&quot; /&gt;[CRLF]&lt;/Form&gt;
ActrShowStrn=Yes
AsscShowName=No
AsscShowDirt=No
AsscShowStrn=No
GnrlShowName=No
GnrlShowStrn=No
GnrlShowCntr=No
DepdShowName=No
DepdShowStrn=Yes
DepdShowCntr=No

[DisplayPreferences\Symbol]

[DisplayPreferences\Symbol\FRMEOBJ]
STRNFont=Arial,8,N
STRNFont color=0, 0, 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
LABLFont=Arial,8,N
LABLFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=6000
Height=2000
Brush color=255 255 255
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=64
Brush gradient color=192 192 192
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 255 128 128
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\FRMELNK]
CENTERFont=Arial,8,N
CENTERFont color=0, 0, 0
Line style=2
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\FILO]
OBJSTRNFont=Arial,8,N
OBJSTRNFont color=0, 0, 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
LCNMFont=Arial,8,N
LCNMFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=Yes
Keep center=Yes
Keep size=No
Width=2400
Height=2400
Brush color=255 255 255
Fill Color=No
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 0 0 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\CLDPCKG]
STRNFont=Arial,8,N
STRNFont color=0 0 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
LABLFont=Arial,8,N
LABLFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=255 255 192
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 178 178 178
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\UCDACTR]
STRNFont=Arial,8,N
STRNFont color=0 0 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=Yes
Keep center=Yes
Keep size=No
Width=4800
Height=3600
Brush color=128 64 64
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 150 128 0 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\UCDASSC]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
Line style=2
Pen=1 0 128 0 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\GNRLLINK]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
Line style=2
Pen=1 0 128 0 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\DEPDLINK]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
Line style=2
Pen=2 0 128 0 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\UCDUCAS]
STRNFont=Arial,8,N
STRNFont color=0 0 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0 0 0
LABLFont=Arial,8,N
LABLFont color=0 0 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=7200
Height=5400
Brush color=255 207 159
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=16
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 150 128 0 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\USRDEPD]
OBJXSTRFont=Arial,8,N
OBJXSTRFont color=0 0 0
Line style=2
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=2 0 128 0 0
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\Free Symbol]
Free TextFont=Arial,8,N
Free TextFont color=0 0 0
Line style=2
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 0 0
Shadow color=192 192 192
Shadow=0</a:DisplayPreferences>
<a:PaperSize>(8268, 11693)</a:PaperSize>
<a:PageMargins>((315,354), (433,354))</a:PageMargins>
<a:PageOrientation>1</a:PageOrientation>
<a:PaperSource>15</a:PaperSource>
<c:Symbols>
<o:LinkSymbol Id="o6">
<a:CreationDate>1681827318</a:CreationDate>
<a:ModificationDate>1681828291</a:ModificationDate>
<a:CenterTextOffset>(-2422, 1534)</a:CenterTextOffset>
<a:CenterText>include</a:CenterText>
<a:Rect>((4884,33196), (19350,37341))</a:Rect>
<a:ListOfPoints>((4884,35926),(12513,35926),(12513,33196),(19350,33196))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:EllipseSymbol Ref="o7"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o8"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o9">
<a:CreationDate>1681827346</a:CreationDate>
<a:ModificationDate>1681828271</a:ModificationDate>
<a:CenterTextOffset>(-2254, -958)</a:CenterTextOffset>
<a:CenterText>include</a:CenterText>
<a:Rect>((5909,31002), (20100,32651))</a:Rect>
<a:ListOfPoints>((5909,32651),(11442,32651),(11442,31125),(20100,31125))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:EllipseSymbol Ref="o10"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o8"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o11">
<a:CreationDate>1681827358</a:CreationDate>
<a:ModificationDate>1681830773</a:ModificationDate>
<a:Rect>((-23160,15000), (3093,35677))</a:Rect>
<a:ListOfPoints>((-23160,15000),(-23160,35677),(3093,35677))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o7"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o13">
<a:CreationDate>1681827451</a:CreationDate>
<a:ModificationDate>1681830773</a:ModificationDate>
<a:Rect>((-23010,15675), (4107,30504))</a:Rect>
<a:ListOfPoints>((-23010,15675),(-13921,15675),(-13921,30504),(4107,30504))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o14"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o15">
<a:CreationDate>1681830458</a:CreationDate>
<a:ModificationDate>1681830773</a:ModificationDate>
<a:Rect>((-22840,14122), (-469,22180))</a:Rect>
<a:ListOfPoints>((-22840,14122),(-9976,14122),(-9976,22180),(-469,22180))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o16"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o17">
<a:CreationDate>1681830469</a:CreationDate>
<a:ModificationDate>1681830773</a:ModificationDate>
<a:Rect>((-22671,14009), (3532,21616))</a:Rect>
<a:ListOfPoints>((-22671,14009),(-6821,14009),(-6821,21616),(3532,21616))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o18"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o19">
<a:CreationDate>1681830479</a:CreationDate>
<a:ModificationDate>1681830948</a:ModificationDate>
<a:Rect>((-23290,14122), (3815,18855))</a:Rect>
<a:ListOfPoints>((-23290,14122),(-4961,14122),(-4961,18855),(3815,18855))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o20"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o21">
<a:CreationDate>1681830514</a:CreationDate>
<a:ModificationDate>1681830773</a:ModificationDate>
<a:Rect>((-23234,14347), (-5146,26068))</a:Rect>
<a:ListOfPoints>((-23234,14347),(-23234,14460),(-10556,14460),(-10556,26068),(-5146,26068))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o22"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o23">
<a:CreationDate>1681830606</a:CreationDate>
<a:ModificationDate>1681831362</a:ModificationDate>
<a:Rect>((-23516,11709), (288,16648))</a:Rect>
<a:ListOfPoints>((-23516,14752),(-23516,11709),(-3681,11709),(-3681,16648),(288,16648))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o24"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o25">
<a:CreationDate>1681830617</a:CreationDate>
<a:ModificationDate>1681830952</a:ModificationDate>
<a:Rect>((-23347,9962), (3250,14132))</a:Rect>
<a:ListOfPoints>((-23347,14132),(-20473,14132),(-20473,9962),(-2610,9962),(-2610,14076),(3250,14076))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o26"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o27">
<a:CreationDate>1681830626</a:CreationDate>
<a:ModificationDate>1681832143</a:ModificationDate>
<a:Rect>((-23290,9557), (3437,14752))</a:Rect>
<a:ListOfPoints>((-23290,14752),(-20586,14752),(-20586,9557),(-1427,9557),(-1427,10193),(3437,10193))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o28"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o29">
<a:CreationDate>1681830650</a:CreationDate>
<a:ModificationDate>1681831161</a:ModificationDate>
<a:Rect>((-23009,6412), (6263,14188))</a:Rect>
<a:ListOfPoints>((-23009,14188),(-20811,14188),(-20811,6412),(-2554,6412),(-2554,7652),(6263,7652))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o30"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o31">
<a:CreationDate>1681830667</a:CreationDate>
<a:ModificationDate>1681833724</a:ModificationDate>
<a:Rect>((-23572,3805), (4000,14188))</a:Rect>
<a:ListOfPoints>((-23572,14188),(-21262,14188),(-21262,5060),(4000,5060),(4000,3805))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o32"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o33">
<a:CreationDate>1681830690</a:CreationDate>
<a:ModificationDate>1681831181</a:ModificationDate>
<a:Rect>((-23459,1046), (6682,14921))</a:Rect>
<a:ListOfPoints>((-23459,14921),(-23459,1904),(-2047,1904),(-2047,1046),(6682,1046))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o34"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o35">
<a:CreationDate>1681830738</a:CreationDate>
<a:ModificationDate>1681831717</a:ModificationDate>
<a:Rect>((-23178,-1156), (7603,14422))</a:Rect>
<a:ListOfPoints>((-23178,14422),(-20811,14422),(-20811,-961),(-1371,-961),(-1371,-1156),(7603,-1156))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o36"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o37">
<a:CreationDate>1681830748</a:CreationDate>
<a:ModificationDate>1681831329</a:ModificationDate>
<a:Rect>((-23065,-4983), (9047,14084))</a:Rect>
<a:ListOfPoints>((-23065,14084),(-20586,14084),(-20586,-3952),(9047,-3952),(7783,-4983))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o38"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o39">
<a:CreationDate>1681831076</a:CreationDate>
<a:ModificationDate>1681831335</a:ModificationDate>
<a:Rect>((-22783,-6516), (7779,14163))</a:Rect>
<a:ListOfPoints>((-22783,14163),(-22783,-6516),(7779,-6516))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o40"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o41">
<a:CreationDate>1681831101</a:CreationDate>
<a:ModificationDate>1681831454</a:ModificationDate>
<a:Rect>((-22670,-10438), (7796,14017))</a:Rect>
<a:ListOfPoints>((-22670,14017),(-22670,-10438),(-4752,-10438),(-4752,-10387),(-1427,-10387),(-1427,-10385),(7796,-10385))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o42"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o43">
<a:CreationDate>1681831126</a:CreationDate>
<a:ModificationDate>1681831457</a:ModificationDate>
<a:Rect>((-22487,-12536), (6721,14443))</a:Rect>
<a:ListOfPoints>((-22487,14443),(-22487,-12536),(6721,-12536))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o44"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o45">
<a:CreationDate>1681831149</a:CreationDate>
<a:ModificationDate>1681831474</a:ModificationDate>
<a:Rect>((-22597,-15431), (7380,14004))</a:Rect>
<a:ListOfPoints>((-22597,14004),(-22597,-15431),(-7993,-15431),(-7993,-15350),(-2612,-15350),(-2612,-15417),(7380,-15417))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o46"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o47">
<a:CreationDate>1681833402</a:CreationDate>
<a:ModificationDate>1681833402</a:ModificationDate>
<a:Rect>((-23030,-17434), (5920,14211))</a:Rect>
<a:ListOfPoints>((-23030,14211),(-23030,-17434),(5920,-17434))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o48"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o49">
<a:CreationDate>1681833423</a:CreationDate>
<a:ModificationDate>1681833423</a:ModificationDate>
<a:Rect>((-23100,-21826), (5750,15010))</a:Rect>
<a:ListOfPoints>((-23100,15010),(-22701,15010),(-22701,-20728),(2156,-20728),(2156,-21826),(5750,-21826))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o50"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o51">
<a:CreationDate>1681833434</a:CreationDate>
<a:ModificationDate>1681833434</a:ModificationDate>
<a:Rect>((-23499,-25519), (7047,14810))</a:Rect>
<a:ListOfPoints>((-23499,14810),(-22401,14810),(-22401,-25519),(159,-25519),(159,-23423),(7047,-23423))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o52"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o53">
<a:CreationDate>1681833446</a:CreationDate>
<a:ModificationDate>1681833446</a:ModificationDate>
<a:Rect>((-23499,-27516), (6947,14610))</a:Rect>
<a:ListOfPoints>((-23499,14610),(-22301,14610),(-22301,-27516),(2056,-27516),(2056,-26518),(6947,-26518))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o54"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o55">
<a:CreationDate>1681833475</a:CreationDate>
<a:ModificationDate>1681833475</a:ModificationDate>
<a:Rect>((-23299,-31860), (6548,14359))</a:Rect>
<a:ListOfPoints>((-23299,14359),(-22102,14359),(-22102,-31860),(-340,-31860),(-340,-29863),(6548,-29863))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o56"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o57">
<a:CreationDate>1681833492</a:CreationDate>
<a:ModificationDate>1681833492</a:ModificationDate>
<a:Rect>((-23100,-34452), (5949,14593))</a:Rect>
<a:ListOfPoints>((-23100,14593),(-22002,14593),(-22002,-34452),(-1338,-34452),(-1338,-32356),(5949,-32356))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o58"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o59">
<a:CreationDate>1681833509</a:CreationDate>
<a:ModificationDate>1681833509</a:ModificationDate>
<a:Rect>((-23399,-36173), (6448,14341))</a:Rect>
<a:ListOfPoints>((-23399,14341),(-22201,14341),(-22201,-36173),(60,-36173),(60,-34276),(6448,-34276))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o60"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o61">
<a:CreationDate>1681833538</a:CreationDate>
<a:ModificationDate>1681833708</a:ModificationDate>
<a:Rect>((-23100,-37358), (8046,14263))</a:Rect>
<a:ListOfPoints>((-23100,14263),(-23100,-37059),(4152,-37059),(4152,-37358),(8046,-37358),(8046,-37159))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o62"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o63">
<a:CreationDate>1681834590</a:CreationDate>
<a:ModificationDate>1681834590</a:ModificationDate>
<a:Rect>((-23116,-43679), (4775,14868))</a:Rect>
<a:ListOfPoints>((-23116,14868),(-22347,14868),(-22347,-43679),(1371,-43679),(1371,-42032),(4775,-42032))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o64"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o65">
<a:CreationDate>1681834600</a:CreationDate>
<a:ModificationDate>1681834662</a:ModificationDate>
<a:Rect>((-24433,-66624), (6862,-62671))</a:Rect>
<a:ListOfPoints>((-24433,-66624),(-24433,-62671),(6862,-62671))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o66"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o67"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o68">
<a:CreationDate>1681834602</a:CreationDate>
<a:ModificationDate>1681834662</a:ModificationDate>
<a:Rect>((-24543,-67503), (5764,-66295))</a:Rect>
<a:ListOfPoints>((-24543,-66295),(-8604,-66295),(-8604,-67503),(5764,-67503))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o66"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o69"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o70">
<a:CreationDate>1681834606</a:CreationDate>
<a:ModificationDate>1681834662</a:ModificationDate>
<a:Rect>((-24653,-75271), (5434,-68491))</a:Rect>
<a:ListOfPoints>((-24653,-68491),(-24653,-75271),(5434,-75271))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o66"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o71"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o72">
<a:CreationDate>1681834635</a:CreationDate>
<a:ModificationDate>1681834662</a:ModificationDate>
<a:Rect>((-24872,-65706), (4336,-50553))</a:Rect>
<a:ListOfPoints>((-24872,-65706),(-24872,-50553),(4336,-50553))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o66"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o73"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o74">
<a:CreationDate>1681834641</a:CreationDate>
<a:ModificationDate>1681834662</a:ModificationDate>
<a:Rect>((-24323,-64828), (4556,-56153))</a:Rect>
<a:ListOfPoints>((-24323,-64828),(-24323,-56153),(4556,-56153))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o66"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o75"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o76">
<a:CreationDate>1681834648</a:CreationDate>
<a:ModificationDate>1681834662</a:ModificationDate>
<a:Rect>((-24543,-82808), (5324,-67984))</a:Rect>
<a:ListOfPoints>((-24543,-67984),(-24543,-82808),(5324,-82808))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o66"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o77"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:EllipseSymbol Id="o8">
<a:Text>login</a:Text>
<a:CreationDate>1681827273</a:CreationDate>
<a:ModificationDate>1681827281</a:ModificationDate>
<a:Rect>((17775,33750), (24300,29925))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o78">
<a:Text>delete User</a:Text>
<a:CreationDate>1681828343</a:CreationDate>
<a:ModificationDate>1681828379</a:ModificationDate>
<a:Rect>((6575,28001), (3025,25973))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o16">
<a:Text>ajouter promo</a:Text>
<a:CreationDate>1681828645</a:CreationDate>
<a:ModificationDate>1681830542</a:ModificationDate>
<a:Rect>((1220,24623), (-3513,22031))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o18">
<a:Text>edit promo</a:Text>
<a:CreationDate>1681828646</a:CreationDate>
<a:ModificationDate>1681830528</a:ModificationDate>
<a:Rect>((4885,23493), (1953,21187))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o22">
<a:Text>update promo</a:Text>
<a:CreationDate>1681828647</a:CreationDate>
<a:ModificationDate>1681830485</a:ModificationDate>
<a:Rect>((-2666,27219), (-5936,24229))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o20">
<a:Text>delete promo</a:Text>
<a:CreationDate>1681828649</a:CreationDate>
<a:ModificationDate>1681830948</a:ModificationDate>
<a:Rect>((5898,20507), (2461,18591))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o24">
<a:Text>ajouter branch</a:Text>
<a:CreationDate>1681828650</a:CreationDate>
<a:ModificationDate>1681831362</a:ModificationDate>
<a:Rect>((4402,18065), (-162,15586))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o26">
<a:Text>edit  branch</a:Text>
<a:CreationDate>1681828651</a:CreationDate>
<a:ModificationDate>1681830952</a:ModificationDate>
<a:Rect>((6069,14875), (2855,11967))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o28">
<a:Text>update branch</a:Text>
<a:CreationDate>1681828656</a:CreationDate>
<a:ModificationDate>1681831165</a:ModificationDate>
<a:Rect>((7155,10926), (2760,8447))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o30">
<a:Text>delete branch</a:Text>
<a:CreationDate>1681828659</a:CreationDate>
<a:ModificationDate>1681831161</a:ModificationDate>
<a:Rect>((9026,8396), (5251,5466))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o32">
<a:Text>ajouter class</a:Text>
<a:CreationDate>1681828661</a:CreationDate>
<a:ModificationDate>1681833724</a:ModificationDate>
<a:Rect>((6873,4325), (3381,2489))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o34">
<a:Text>edit class</a:Text>
<a:CreationDate>1681828663</a:CreationDate>
<a:ModificationDate>1681831181</a:ModificationDate>
<a:Rect>((9163,2410), (6176,438))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o36">
<a:Text>update class</a:Text>
<a:CreationDate>1681828666</a:CreationDate>
<a:ModificationDate>1681831717</a:ModificationDate>
<a:Rect>((10703,255), (7378,-2091))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o38">
<a:Text>delete class</a:Text>
<a:CreationDate>1681828667</a:CreationDate>
<a:ModificationDate>1681831325</a:ModificationDate>
<a:Rect>((6555,-5210), (10275,-3180))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o40">
<a:Text>ajouter livre</a:Text>
<a:CreationDate>1681828669</a:CreationDate>
<a:ModificationDate>1681831322</a:ModificationDate>
<a:Rect>((10596,-6106), (6989,-8416))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o44">
<a:Text>update livre</a:Text>
<a:CreationDate>1681828670</a:CreationDate>
<a:ModificationDate>1681831271</a:ModificationDate>
<a:Rect>((10274,-11155), (6555,-13734))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o42">
<a:Text>edit livre</a:Text>
<a:CreationDate>1681828672</a:CreationDate>
<a:ModificationDate>1681831192</a:ModificationDate>
<a:Rect>((9542,-8928), (6894,-10718))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o46">
<a:Text>delete livre</a:Text>
<a:CreationDate>1681828674</a:CreationDate>
<a:ModificationDate>1681831463</a:ModificationDate>
<a:Rect>((10215,-14236), (6778,-16378))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o48">
<a:Text>ajouter categorie</a:Text>
<a:CreationDate>1681828676</a:CreationDate>
<a:ModificationDate>1681832623</a:ModificationDate>
<a:Rect>((10045,-16926), (5251,-19420))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o50">
<a:Text>edit categorie</a:Text>
<a:CreationDate>1681828678</a:CreationDate>
<a:ModificationDate>1681832615</a:ModificationDate>
<a:Rect>((10338,-19863), (4852,-22713))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:PolylineSymbol Id="o79">
<a:CreationDate>1681830840</a:CreationDate>
<a:ModificationDate>1681830895</a:ModificationDate>
<a:Rect>((-2948,25262), (21225,25600))</a:Rect>
<a:ListOfPoints>((-2948,25600),(-2948,25262),(21225,25262))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o80">
<a:CreationDate>1681830850</a:CreationDate>
<a:ModificationDate>1681831975</a:ModificationDate>
<a:Rect>((21169,25262), (21619,29713))</a:Rect>
<a:ListOfPoints>((21338,25262),(21450,25262),(21450,29713))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o81">
<a:CreationDate>1681830910</a:CreationDate>
<a:ModificationDate>1681830910</a:ModificationDate>
<a:Rect>((21507,29882), (21789,29982))</a:Rect>
<a:ListOfPoints>((21507,29882),(21789,29882))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o82">
<a:CreationDate>1681830931</a:CreationDate>
<a:ModificationDate>1681830992</a:ModificationDate>
<a:Rect>((1447,23740), (21450,25205))</a:Rect>
<a:ListOfPoints>((1447,23740),(1447,25205),(21450,25205))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o83">
<a:CreationDate>1681830938</a:CreationDate>
<a:ModificationDate>1681831003</a:ModificationDate>
<a:Rect>((5109,22050), (21225,25149))</a:Rect>
<a:ListOfPoints>((5109,22050),(5109,25149),(21225,25149))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o84">
<a:CreationDate>1681830959</a:CreationDate>
<a:ModificationDate>1681831017</a:ModificationDate>
<a:Rect>((5786,19570), (8997,25149))</a:Rect>
<a:ListOfPoints>((5786,19570),(8997,19570),(8997,25149))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o85">
<a:CreationDate>1681830964</a:CreationDate>
<a:ModificationDate>1681831369</a:ModificationDate>
<a:Rect>((4272,16456), (10068,24867))</a:Rect>
<a:ListOfPoints>((4272,16456),(10068,16456),(10068,24867))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o86">
<a:CreationDate>1681831380</a:CreationDate>
<a:ModificationDate>1681831538</a:ModificationDate>
<a:CenterTextOffset>(6737, 886)</a:CenterTextOffset>
<a:CenterText>include</a:CenterText>
<a:Rect>((10954,13455), (21591,26724))</a:Rect>
<a:ListOfPoints>((10954,13455),(10954,25251),(21591,25251))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o87">
<a:CreationDate>1681831400</a:CreationDate>
<a:ModificationDate>1681831493</a:ModificationDate>
<a:Rect>((6249,13046), (11227,13387))</a:Rect>
<a:ListOfPoints>((6249,13046),(6249,13387),(11227,13387))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o88">
<a:CreationDate>1681831408</a:CreationDate>
<a:ModificationDate>1681831562</a:ModificationDate>
<a:Rect>((7068,9637), (12999,9706))</a:Rect>
<a:ListOfPoints>((7068,9637),(7068,9706),(12999,9706))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o89">
<a:CreationDate>1681831413</a:CreationDate>
<a:ModificationDate>1681831552</a:ModificationDate>
<a:Rect>((12931,9706), (12999,25046))</a:Rect>
<a:ListOfPoints>((12999,9706),(12931,9706),(12931,25046))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o90">
<a:CreationDate>1681831416</a:CreationDate>
<a:ModificationDate>1681831583</a:ModificationDate>
<a:Rect>((8908,6774), (14431,6910))</a:Rect>
<a:ListOfPoints>((8908,6774),(8908,6910),(14431,6910))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o91">
<a:CreationDate>1681831421</a:CreationDate>
<a:ModificationDate>1681831597</a:ModificationDate>
<a:Rect>((14158,6910), (14431,25046))</a:Rect>
<a:ListOfPoints>((14431,6910),(14158,6910),(14158,25046))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o92">
<a:CreationDate>1681831427</a:CreationDate>
<a:ModificationDate>1681831608</a:ModificationDate>
<a:Rect>((8022,4251), (14840,4351))</a:Rect>
<a:ListOfPoints>((8022,4251),(14840,4251))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o93">
<a:CreationDate>1681831430</a:CreationDate>
<a:ModificationDate>1681831618</a:ModificationDate>
<a:Rect>((14840,4251), (14977,25115))</a:Rect>
<a:ListOfPoints>((14840,4251),(14977,4251),(14977,25115))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o94">
<a:CreationDate>1681831434</a:CreationDate>
<a:ModificationDate>1681831630</a:ModificationDate>
<a:Rect>((9045,1319), (15727,1387))</a:Rect>
<a:ListOfPoints>((9045,1319),(9045,1387),(15727,1387))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o95">
<a:CreationDate>1681831438</a:CreationDate>
<a:ModificationDate>1681831648</a:ModificationDate>
<a:Rect>((15727,1387), (15863,25251))</a:Rect>
<a:ListOfPoints>((15727,1387),(15863,1387),(15863,25251))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o96">
<a:CreationDate>1681831738</a:CreationDate>
<a:ModificationDate>1681831807</a:ModificationDate>
<a:Rect>((10492,-1110), (17849,-1010))</a:Rect>
<a:ListOfPoints>((10492,-1110),(17849,-1110))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o97">
<a:CreationDate>1681831745</a:CreationDate>
<a:ModificationDate>1681831820</a:ModificationDate>
<a:Rect>((17739,-1083), (17849,25271))</a:Rect>
<a:ListOfPoints>((17849,25271),(17739,25271),(17739,-1083))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o98">
<a:CreationDate>1681831760</a:CreationDate>
<a:ModificationDate>1681831832</a:ModificationDate>
<a:Rect>((10053,-4816), (16861,-4706))</a:Rect>
<a:ListOfPoints>((10053,-4706),(10053,-4816),(16861,-4816))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o99">
<a:CreationDate>1681831763</a:CreationDate>
<a:ModificationDate>1681831842</a:ModificationDate>
<a:Rect>((17410,-5146), (17739,-973))</a:Rect>
<a:ListOfPoints>((17410,-5146),(17739,-5146),(17739,-973))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o100">
<a:CreationDate>1681831770</a:CreationDate>
<a:ModificationDate>1681831853</a:ModificationDate>
<a:Rect>((9833,-7622), (17080,-7293))</a:Rect>
<a:ListOfPoints>((9833,-7622),(9833,-7293),(17080,-7293))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o101">
<a:CreationDate>1681831776</a:CreationDate>
<a:ModificationDate>1681831864</a:ModificationDate>
<a:Rect>((17080,-7513), (17849,-4987))</a:Rect>
<a:ListOfPoints>((17080,-7513),(17849,-7513),(17849,-4987))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o102">
<a:CreationDate>1681831780</a:CreationDate>
<a:ModificationDate>1681831880</a:ModificationDate>
<a:Rect>((9613,-10477), (16971,-10148))</a:Rect>
<a:ListOfPoints>((9613,-10477),(9613,-10148),(16971,-10148))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o103">
<a:CreationDate>1681831782</a:CreationDate>
<a:ModificationDate>1681831930</a:ModificationDate>
<a:Rect>((16971,-10148), (17739,-6744))</a:Rect>
<a:ListOfPoints>((16971,-10148),(17739,-10148),(17739,-6744))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o104">
<a:CreationDate>1681831786</a:CreationDate>
<a:ModificationDate>1681831891</a:ModificationDate>
<a:Rect>((9833,-12783), (16531,-12673))</a:Rect>
<a:ListOfPoints>((9833,-12783),(9833,-12673),(16531,-12673))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o105">
<a:CreationDate>1681831787</a:CreationDate>
<a:ModificationDate>1681831920</a:ModificationDate>
<a:Rect>((16531,-12673), (17739,-9818))</a:Rect>
<a:ListOfPoints>((16531,-12673),(17739,-12673),(17739,-9818))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o106">
<a:CreationDate>1681831792</a:CreationDate>
<a:ModificationDate>1681831907</a:ModificationDate>
<a:Rect>((10053,-15419), (16861,-15089))</a:Rect>
<a:ListOfPoints>((10053,-15419),(10053,-15089),(16861,-15089))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o107">
<a:CreationDate>1681831794</a:CreationDate>
<a:ModificationDate>1681831953</a:ModificationDate>
<a:Rect>((16861,-15089), (17959,-11575))</a:Rect>
<a:ListOfPoints>((16861,-15089),(17959,-15089),(17959,-11575))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:EllipseSymbol Id="o52">
<a:Text>update categorie</a:Text>
<a:CreationDate>1681832550</a:CreationDate>
<a:ModificationDate>1681832667</a:ModificationDate>
<a:Rect>((10110,-23107), (5498,-25410))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o54">
<a:Text>delete categorie</a:Text>
<a:CreationDate>1681832552</a:CreationDate>
<a:ModificationDate>1681832701</a:ModificationDate>
<a:Rect>((11098,-26207), (5202,-28799))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o56">
<a:Text>ajouter auteur</a:Text>
<a:CreationDate>1681832554</a:CreationDate>
<a:ModificationDate>1681833167</a:ModificationDate>
<a:Rect>((10739,-29114), (5418,-31431))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o58">
<a:Text>edit autuer</a:Text>
<a:CreationDate>1681832555</a:CreationDate>
<a:ModificationDate>1681833180</a:ModificationDate>
<a:Rect>((11010,-31373), (5306,-33607))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o60">
<a:Text>update autuer</a:Text>
<a:CreationDate>1681832720</a:CreationDate>
<a:ModificationDate>1681833276</a:ModificationDate>
<a:Rect>((10558,-33789), (5476,-35785))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o62">
<a:Text>delete auteur</a:Text>
<a:CreationDate>1681832725</a:CreationDate>
<a:ModificationDate>1681833295</a:ModificationDate>
<a:Rect>((11191,-35968), (5657,-37692))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:PolylineSymbol Id="o108">
<a:CreationDate>1681833303</a:CreationDate>
<a:ModificationDate>1681833551</a:ModificationDate>
<a:Rect>((10103,-18582), (16819,-18401))</a:Rect>
<a:ListOfPoints>((10103,-18401),(10103,-18582),(16819,-18582))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o109">
<a:CreationDate>1681833305</a:CreationDate>
<a:ModificationDate>1681833560</a:ModificationDate>
<a:Rect>((17091,-18582), (18089,-15315))</a:Rect>
<a:ListOfPoints>((17091,-18582),(18089,-18582),(18089,-15315))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o110">
<a:CreationDate>1681833309</a:CreationDate>
<a:ModificationDate>1681833569</a:ModificationDate>
<a:Rect>((10285,-21668), (16819,-21577))</a:Rect>
<a:ListOfPoints>((10285,-21668),(10285,-21577),(16819,-21577))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o111">
<a:CreationDate>1681833311</a:CreationDate>
<a:ModificationDate>1681833578</a:ModificationDate>
<a:Rect>((17000,-21577), (18180,-18582))</a:Rect>
<a:ListOfPoints>((17000,-21577),(18180,-21577),(18180,-18582))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o112">
<a:CreationDate>1681833314</a:CreationDate>
<a:ModificationDate>1681833586</a:ModificationDate>
<a:Rect>((10103,-24663), (17817,-24563))</a:Rect>
<a:ListOfPoints>((10103,-24663),(17817,-24663))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o113">
<a:CreationDate>1681833316</a:CreationDate>
<a:ModificationDate>1681833595</a:ModificationDate>
<a:Rect>((17817,-24663), (18271,-21396))</a:Rect>
<a:ListOfPoints>((17817,-24663),(18271,-24663),(18271,-21396))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o114">
<a:CreationDate>1681833319</a:CreationDate>
<a:ModificationDate>1681833608</a:ModificationDate>
<a:Rect>((11192,-27839), (17908,-27657))</a:Rect>
<a:ListOfPoints>((11192,-27657),(11192,-27839),(17908,-27839))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o115">
<a:CreationDate>1681833321</a:CreationDate>
<a:ModificationDate>1681833618</a:ModificationDate>
<a:Rect>((17908,-27839), (18362,-24390))</a:Rect>
<a:ListOfPoints>((17908,-27839),(18362,-27839),(18362,-24390))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o116">
<a:CreationDate>1681833323</a:CreationDate>
<a:ModificationDate>1681833628</a:ModificationDate>
<a:Rect>((10466,-30834), (17726,-30734))</a:Rect>
<a:ListOfPoints>((10466,-30834),(17726,-30834))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o117">
<a:CreationDate>1681833325</a:CreationDate>
<a:ModificationDate>1681833636</a:ModificationDate>
<a:Rect>((17726,-30834), (18362,-27567))</a:Rect>
<a:ListOfPoints>((17726,-30834),(18362,-30834),(18362,-27567))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o118">
<a:CreationDate>1681833327</a:CreationDate>
<a:ModificationDate>1681833647</a:ModificationDate>
<a:Rect>((10920,-33647), (18271,-33284))</a:Rect>
<a:ListOfPoints>((10920,-33284),(10920,-33647),(18271,-33647))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o119">
<a:CreationDate>1681833329</a:CreationDate>
<a:ModificationDate>1681833657</a:ModificationDate>
<a:Rect>((18271,-33647), (18362,-30289))</a:Rect>
<a:ListOfPoints>((18271,-33647),(18362,-33647),(18362,-30289))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o120">
<a:CreationDate>1681833332</a:CreationDate>
<a:ModificationDate>1681833666</a:ModificationDate>
<a:Rect>((10739,-35462), (18089,-35362))</a:Rect>
<a:ListOfPoints>((10739,-35462),(18089,-35462))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o121">
<a:CreationDate>1681833334</a:CreationDate>
<a:ModificationDate>1681833677</a:ModificationDate>
<a:Rect>((18089,-35462), (18543,-33647))</a:Rect>
<a:ListOfPoints>((18089,-35462),(18543,-35462),(18543,-33647))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o122">
<a:CreationDate>1681833337</a:CreationDate>
<a:ModificationDate>1681833685</a:ModificationDate>
<a:Rect>((10920,-37186), (18089,-37095))</a:Rect>
<a:ListOfPoints>((10920,-37095),(10920,-37186),(18089,-37186))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o123">
<a:CreationDate>1681833339</a:CreationDate>
<a:ModificationDate>1681833695</a:ModificationDate>
<a:Rect>((18089,-37186), (18543,-35099))</a:Rect>
<a:ListOfPoints>((18089,-37186),(18543,-37186),(18543,-35099))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:EllipseSymbol Id="o73">
<a:Text>ajouteur commentaire</a:Text>
<a:CreationDate>1681833746</a:CreationDate>
<a:ModificationDate>1681833963</a:ModificationDate>
<a:Rect>((12663,-48365), (3643,-52112))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o75">
<a:Text>edit commentaire</a:Text>
<a:CreationDate>1681833753</a:CreationDate>
<a:ModificationDate>1681833961</a:ModificationDate>
<a:Rect>((13017,-53877), (3112,-58475))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o67">
<a:Text>update commentair</a:Text>
<a:CreationDate>1681833755</a:CreationDate>
<a:ModificationDate>1681833959</a:ModificationDate>
<a:Rect>((13547,-60244), (3467,-65372))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o69">
<a:Text>delete commentaire</a:Text>
<a:CreationDate>1681833757</a:CreationDate>
<a:ModificationDate>1681833953</a:ModificationDate>
<a:Rect>((13900,-66259), (3642,-70326))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o71">
<a:Text>ajouter reservation</a:Text>
<a:CreationDate>1681833761</a:CreationDate>
<a:ModificationDate>1681833952</a:ModificationDate>
<a:Rect>((14256,-72271), (3467,-77400))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o77">
<a:Text>delete reservation</a:Text>
<a:CreationDate>1681833763</a:CreationDate>
<a:ModificationDate>1681833950</a:ModificationDate>
<a:Rect>((15317,-79168), (4175,-84827))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o64">
<a:Text>change status de resarvation</a:Text>
<a:CreationDate>1681833971</a:CreationDate>
<a:ModificationDate>1681833988</a:ModificationDate>
<a:Rect>((13016,-40084), (3820,-45743))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:EllipseSymbol>
<o:PolylineSymbol Id="o124">
<a:CreationDate>1681834718</a:CreationDate>
<a:ModificationDate>1681834776</a:ModificationDate>
<a:Rect>((13445,-42738), (19659,-42479))</a:Rect>
<a:ListOfPoints>((13445,-42479),(13445,-42738),(19659,-42738))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o125">
<a:CreationDate>1681834726</a:CreationDate>
<a:ModificationDate>1681834768</a:ModificationDate>
<a:Rect>((18623,-42997), (18882,-36783))</a:Rect>
<a:ListOfPoints>((18623,-42997),(18882,-42997),(18882,-36783))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o126">
<a:CreationDate>1681834729</a:CreationDate>
<a:ModificationDate>1681834787</a:ModificationDate>
<a:Rect>((11891,-50505), (19659,-49987))</a:Rect>
<a:ListOfPoints>((11891,-50505),(11891,-49987),(19659,-49987))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o127">
<a:CreationDate>1681834732</a:CreationDate>
<a:ModificationDate>1681834796</a:ModificationDate>
<a:Rect>((19400,-49987), (19659,-42738))</a:Rect>
<a:ListOfPoints>((19659,-49987),(19400,-49987),(19400,-42738))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o128">
<a:CreationDate>1681834734</a:CreationDate>
<a:ModificationDate>1681834806</a:ModificationDate>
<a:Rect>((13445,-56461), (20436,-56202))</a:Rect>
<a:ListOfPoints>((13445,-56461),(13445,-56202),(20436,-56202))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o129">
<a:CreationDate>1681834736</a:CreationDate>
<a:ModificationDate>1681834815</a:ModificationDate>
<a:Rect>((19918,-56202), (20436,-49470))</a:Rect>
<a:ListOfPoints>((20436,-56202),(19918,-56202),(19918,-49470))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o130">
<a:CreationDate>1681834739</a:CreationDate>
<a:ModificationDate>1681834823</a:ModificationDate>
<a:Rect>((12409,-63451), (20953,-62934))</a:Rect>
<a:ListOfPoints>((12409,-63451),(12409,-62934),(20953,-62934))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o131">
<a:CreationDate>1681834741</a:CreationDate>
<a:ModificationDate>1681834830</a:ModificationDate>
<a:Rect>((20177,-62934), (20953,-55684))</a:Rect>
<a:ListOfPoints>((20953,-62934),(20177,-62934),(20177,-55684))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o132">
<a:CreationDate>1681834743</a:CreationDate>
<a:ModificationDate>1681834838</a:ModificationDate>
<a:Rect>((14222,-68371), (21212,-68271))</a:Rect>
<a:ListOfPoints>((14222,-68371),(21212,-68371))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o133">
<a:CreationDate>1681834745</a:CreationDate>
<a:ModificationDate>1681834849</a:ModificationDate>
<a:Rect>((20436,-68371), (20695,-60344))</a:Rect>
<a:ListOfPoints>((20436,-68371),(20695,-68371),(20695,-60344))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o134">
<a:CreationDate>1681834749</a:CreationDate>
<a:ModificationDate>1681834861</a:ModificationDate>
<a:Rect>((14480,-74585), (21471,-74485))</a:Rect>
<a:ListOfPoints>((14480,-74585),(21471,-74585))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o135">
<a:CreationDate>1681834750</a:CreationDate>
<a:ModificationDate>1681834873</a:ModificationDate>
<a:Rect>((21471,-74585), (21571,-67594))</a:Rect>
<a:ListOfPoints>((21471,-74585),(21471,-67594))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o136">
<a:CreationDate>1681834753</a:CreationDate>
<a:ModificationDate>1681834881</a:ModificationDate>
<a:Rect>((13963,-81576), (20695,-81317))</a:Rect>
<a:ListOfPoints>((13963,-81576),(13963,-81317),(20695,-81317))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:PolylineSymbol Id="o137">
<a:CreationDate>1681834755</a:CreationDate>
<a:ModificationDate>1681834890</a:ModificationDate>
<a:Rect>((20695,-81317), (20953,-74585))</a:Rect>
<a:ListOfPoints>((20695,-81317),(20953,-81317),(20953,-74585))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>4130</a:TextStyle>
<a:ArrowStyle>0</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
</o:PolylineSymbol>
<o:GeneralizationSymbol Id="o138">
<a:CreationDate>1681827109</a:CreationDate>
<a:ModificationDate>1681834662</a:ModificationDate>
<a:Rect>((-24606,-65874), (-23606,17175))</a:Rect>
<a:ListOfPoints>((-24452,-65874),(-24452,-524),(-23760,-524),(-23760,17175))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:ArrowStyle>7</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ActorSymbol Ref="o66"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ActorSymbol Ref="o12"/>
</c:DestinationSymbol>
<c:Object>
<o:Generalization Ref="o139"/>
</c:Object>
</o:GeneralizationSymbol>
<o:LinkSymbol Id="o140">
<a:CreationDate>1681827530</a:CreationDate>
<a:ModificationDate>1681830773</a:ModificationDate>
<a:Rect>((-23065,16755), (4023,33032))</a:Rect>
<a:ListOfPoints>((-23065,16755),(-16472,16755),(-16472,33032),(4023,33032))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o10"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o141">
<a:CreationDate>1681828127</a:CreationDate>
<a:ModificationDate>1681828326</a:ModificationDate>
<a:CenterTextOffset>(-2310, -746)</a:CenterTextOffset>
<a:CenterText>include</a:CenterText>
<a:Rect>((7269,27880), (22014,30098))</a:Rect>
<a:ListOfPoints>((7269,29659),(12851,29659),(12851,30086),(22014,30086))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:EllipseSymbol Ref="o14"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o8"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o142">
<a:CreationDate>1681828393</a:CreationDate>
<a:ModificationDate>1681829406</a:ModificationDate>
<a:CenterTextOffset>(-3831, 1396)</a:CenterTextOffset>
<a:CenterText>include</a:CenterText>
<a:Rect>((6236,26819), (19929,30312))</a:Rect>
<a:ListOfPoints>((6236,26819),(19929,26819),(19929,30312))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:DashStyle>3</a:DashStyle>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:EllipseSymbol Ref="o78"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o8"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:LinkSymbol Id="o143">
<a:CreationDate>1681828565</a:CreationDate>
<a:ModificationDate>1681830773</a:ModificationDate>
<a:Rect>((-23854,14648), (5164,27778))</a:Rect>
<a:ListOfPoints>((-23854,14648),(-12596,14648),(-12596,27778),(5164,27778))</a:ListOfPoints>
<a:CornerStyle>2</a:CornerStyle>
<a:TextStyle>0</a:TextStyle>
<a:ArrowStyle>1</a:ArrowStyle>
<a:LineColor>128</a:LineColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<c:SourceSymbol>
<o:ActorSymbol Ref="o12"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:EllipseSymbol Ref="o78"/>
</c:DestinationSymbol>
</o:LinkSymbol>
<o:EllipseSymbol Id="o7">
<a:Text>registre User</a:Text>
<a:CreationDate>1681827035</a:CreationDate>
<a:ModificationDate>1681828291</a:ModificationDate>
<a:Rect>((2967,37484), (6801,34370))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o10">
<a:Text>Edit User</a:Text>
<a:CreationDate>1681827043</a:CreationDate>
<a:ModificationDate>1681828284</a:ModificationDate>
<a:Rect>((3756,33612), (6800,31665))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:EllipseSymbol Id="o14">
<a:Text>Update User</a:Text>
<a:CreationDate>1681827046</a:CreationDate>
<a:ModificationDate>1681828247</a:ModificationDate>
<a:Rect>((3137,30770), (7308,28564))</a:Rect>
<a:TextStyle>4130</a:TextStyle>
<a:AutoAdjustToText>0</a:AutoAdjustToText>
<a:LineColor>128</a:LineColor>
<a:FillColor>16777215</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontName>Arial,8,N</a:FontName>
<a:ManuallyResized>1</a:ManuallyResized>
</o:EllipseSymbol>
<o:ActorSymbol Id="o12">
<a:CreationDate>1681826957</a:CreationDate>
<a:ModificationDate>1681830773</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-26085,13988), (-21286,17587))</a:Rect>
<a:LineColor>128</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4210816</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:KeepAspect>1</a:KeepAspect>
<a:KeepCenter>1</a:KeepCenter>
<c:Object>
<o:Actor Ref="o144"/>
</c:Object>
</o:ActorSymbol>
<o:ActorSymbol Id="o66">
<a:CreationDate>1681826983</a:CreationDate>
<a:ModificationDate>1681834662</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-27077,-68386), (-22278,-64787))</a:Rect>
<a:LineColor>128</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4210816</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<a:KeepAspect>1</a:KeepAspect>
<a:KeepCenter>1</a:KeepCenter>
<c:Object>
<o:Actor Ref="o145"/>
</c:Object>
</o:ActorSymbol>
</c:Symbols>
</o:UseCaseDiagram>
</c:UseCaseDiagrams>
<c:Generalizations>
<o:Generalization Id="o139">
<a:ObjectID>420BAA36-92E1-43FE-BD2C-9DFD22BD3825</a:ObjectID>
<a:Name>Generalisation_1</a:Name>
<a:Code>Generalisation_1</a:Code>
<a:CreationDate>1681827109</a:CreationDate>
<a:Creator>Youcode</a:Creator>
<a:ModificationDate>1681827109</a:ModificationDate>
<a:Modifier>Youcode</a:Modifier>
<c:Object1>
<o:Actor Ref="o144"/>
</c:Object1>
<c:Object2>
<o:Actor Ref="o145"/>
</c:Object2>
</o:Generalization>
</c:Generalizations>
<c:Actors>
<o:Actor Id="o144">
<a:ObjectID>96CC8A00-AE49-4B8A-9783-4B51D7E5C1AA</a:ObjectID>
<a:Name>admin</a:Name>
<a:Code>admin</a:Code>
<a:CreationDate>1681826957</a:CreationDate>
<a:Creator>Youcode</a:Creator>
<a:ModificationDate>1681827121</a:ModificationDate>
<a:Modifier>Youcode</a:Modifier>
</o:Actor>
<o:Actor Id="o145">
<a:ObjectID>907E29E5-9FFA-403C-A72A-01B52941E9EE</a:ObjectID>
<a:Name>etudiant</a:Name>
<a:Code>etudiant</a:Code>
<a:CreationDate>1681826983</a:CreationDate>
<a:Creator>Youcode</a:Creator>
<a:ModificationDate>1681827132</a:ModificationDate>
<a:Modifier>Youcode</a:Modifier>
</o:Actor>
</c:Actors>
<c:TargetModels>
<o:TargetModel Id="o146">
<a:ObjectID>368A37F6-5B9D-4F1A-9CBF-3C2BA7E8E6B5</a:ObjectID>
<a:Name>Java</a:Name>
<a:Code>Java</a:Code>
<a:CreationDate>1681826949</a:CreationDate>
<a:Creator>Youcode</a:Creator>
<a:ModificationDate>1681826949</a:ModificationDate>
<a:Modifier>Youcode</a:Modifier>
<a:TargetModelURL>file:///%_OBJLANG%/java5-j2ee14.xol</a:TargetModelURL>
<a:TargetModelID>0DEDDB90-46E2-45A0-886E-411709DA0DC9</a:TargetModelID>
<a:TargetModelClassID>1811206C-1A4B-11D1-83D9-444553540000</a:TargetModelClassID>
<c:SessionShortcuts>
<o:Shortcut Ref="o3"/>
</c:SessionShortcuts>
</o:TargetModel>
<o:TargetModel Id="o147">
<a:ObjectID>BD4599FF-AD1E-43B0-B1E4-11A04AC41E9E</a:ObjectID>
<a:Name>WSDL for Java</a:Name>
<a:Code>WSDLJava</a:Code>
<a:CreationDate>1681826951</a:CreationDate>
<a:Creator>Youcode</a:Creator>
<a:ModificationDate>1681826951</a:ModificationDate>
<a:Modifier>Youcode</a:Modifier>
<a:TargetModelURL>file:///%_XEM%/WSDLJ2EE.xem</a:TargetModelURL>
<a:TargetModelID>C8F5F7B2-CF9D-4E98-8301-959BB6E86C8A</a:TargetModelID>
<a:TargetModelClassID>186C8AC3-D3DC-11D3-881C-00508B03C75C</a:TargetModelClassID>
<c:SessionShortcuts>
<o:Shortcut Ref="o4"/>
</c:SessionShortcuts>
</o:TargetModel>
</c:TargetModels>
</o:Model>
</c:Children>
</o:RootObject>

</Model>