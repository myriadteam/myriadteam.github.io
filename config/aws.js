module.exports = {
  accessKeyId: process.env.AWS_ACCESS_KEY_ID,
  secretAccessKey: process.env.AWS_SECRET_ACCESS_KEY,
  region: process.env.AWS_REGION,
  s3Bucket: process.env.S3_BUCKET,
  cloudFrontDistributionId: process.env.CLOUDFRONT_DISTRIBUTION_ID,
};
