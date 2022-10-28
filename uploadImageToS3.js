uploadImageToS3(base64, name, bucketName, lat = '', long = ''){
        const accessKeyId = awsConfig.accessKeyId;
        const secretAccessKey = awsConfig.secretAccessKey;
        const s3 = new AWS.S3({ accessKeyId: accessKeyId, secretAccessKey: secretAccessKey});
        var base64Arr = base64.split(",");
        var contentType = '';
        var type = '';
        if (base64Arr[0].includes('pdf')) {
            contentType = 'application/pdf';
        }
        else{
            contentType = 'image/' + type;
            type = base64.split(';')[0].split('/')[1];
            name = `${name}.${type}`;
        }        
        const base64Data = new Buffer.from(base64Arr[1], 'base64');
        var date = new Date();
        var tempMetadata = { 'lat': lat.toString(), 'long': long.toString(), 'date': date.toString() }
        let metadata = JSON.stringify(tempMetadata)
        const params = {
            Bucket: bucketName,
            Key: name,
            Body: base64Data,
            ACL: 'public-read',
            ContentEncoding: 'base64',
            ContentType: contentType,
            Metadata: tempMetadata
        };
        try {
            const { Location, Key } = await s3.upload(params).promise();
            return { Location, Key, lat: lat, long: long };
        } catch (err) {
            return err;
        }
    }

};
