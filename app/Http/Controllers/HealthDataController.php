<?php

namespace App\Http\Controllers;

// Context: making sure all files within app are available (spec)
// require 'vendor/autoload.php'; uncomment when s3 is ready

use Illuminate\Http\Request;
// TODO: activate the aws when ready
// use Aws\S3\S3Client;
// use Aws\Exception\AwsException;

class HealthDataController extends Controller
{
    /**
     * Display the main health services view.
     *
     * @return \Illuminate\View\View
     */
    public function healthView()
    {
        return view('services.healthAi.health');
    }

    /**
     * Display the form for submitting ECG data.
     *
     * @return \Illuminate\View\View
     */
    public function ecgSubmitView(){
        return view('services.healthAi.submitEcg');
    }

   /**
    * Process the submitted ECG data.
    * This includes reading .dat, .atr, .hea files from given directory
    * and processing the data accordingly.
    *
    * @param \Illuminate\Http\Request $request
    * @return void
    */
    public function processEcgData(Request $request){
        $expectedFileExtensions = [
            'hea',
            'atr',
            'dat',
        ];
        $givenFiles = $request->file('files');
        $extensionsFoundInFileList = [];
        // Context: if hdf5 file in list, a single file is sufficient to process
        $hdf5InList = false;

        // Context: Checking given file's extension(type)
        // against expected file types(extensions)
        foreach($givenFiles as $file){
            $givenExtension = $file->getClientOriginalExtension();
            if($givenExtension === 'hdf5'){
                $hdf5InList = true;
                break;
            }
        }
        // Context: if hdf5 is found send file for processing
        // TODO send file
        if($hdf5InList === true){
            dd('process single file, as hdf5 contains all ecg data within one file');
             // After model is ready, and hosted attempt below
                // Create an S3Client
                // $s3Client = new S3Client([
                //     'version' => 'latest',
                //     'region' => 'your-region',
                //     'credentials' => [
                //         'key' => 'your-access-key-id',
                //         'secret' => 'your-secret-access-key',
                //     ],
                // ]);

                // try {
                //     $result = $s3Client->putObject([
                //         'Bucket' => 'your-bucket-name',
                //         'Key' => 'your-file-name',
                //         'SourceFile' => '/path/to/your/file',
                //     ]);
                //     echo "File uploaded successfully. File URL: "
                //     .
                //     $result['ObjectURL'] . "\n";
                // } catch (AwsException $e) {
                //     // Output error message if fails
                //     echo $e->getMessage();
                // }
        }

        // Context: if hdf5 is not found, expect a list(or directory)
        // of files, in this case we will expect for the atr,dat,hea file to
        // exists within the list or dir
        if($hdf5InList === false){
            // look into given directory and search for 3 extensions
            // hea, atr, dat
            // $files = $request->file('files');
            $requiredStrings = ['hea', 'dat', 'atr'];
            $found = array_fill_keys($requiredStrings, false);
            foreach ($givenFiles as $file) {
                $fileName = $file->getClientOriginalName();
                foreach ($requiredStrings as $string) {
                    if (strpos($fileName, $string) !== false) {
                        $found[$string] = true;
                    }
                }
            }

            if (!in_array(false, $found)) {
                dd('will process');
                // After model is ready, and hosted attempt below
                // Create an S3Client
                // $s3Client = new S3Client([
                //     'version' => 'latest',
                //     'region' => 'your-region',
                //     'credentials' => [
                //         'key' => 'your-access-key-id',
                //         'secret' => 'your-secret-access-key',
                //     ],
                // ]);

                // try {
                //     $result = $s3Client->putObject([
                //         'Bucket' => 'your-bucket-name',
                //         'Key' => 'your-file-name',
                //         'SourceFile' => '/path/to/your/file',
                //     ]);
                //     echo "File uploaded successfully. File URL: "
                //     .
                //     $result['ObjectURL'] . "\n";
                // } catch (AwsException $e) {
                //     // Output error message if fails
                //     echo $e->getMessage();
                // }
            } else {
                dd('will not process. missing file');
                echo "Missing one or more required file types.";
            }
        }
    }


































            // If all required files are found, proceed with processing

    }
