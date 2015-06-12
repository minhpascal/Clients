package com.wordnik.client.model



case class Post (
  _id: String,
  created_at: String,
  updated_at: String,
  external_url: String,
  external_url_source: String,
  external_url_type: String,
  image_path: String,
  image_url: String,
  image_height: String,
  image_width: String,
  logo_url: String,
  square_logo_url: String,
  needs_sanitize: String,
  summary: String,
  topic: String,
  approval_status: String,
  approval_transactions: List[String],
  group_ids: List[String],
  slug: String,
  article_id: String,
  comment: String,
  newsletter_ids: List[String],
  is_featured: Boolean,
  advisor_id: String,
  is_published: Boolean,
  is_responsive: Boolean,
  is_proxy_needed: Boolean,
  is_mobile_proxy_needed: Boolean,
  proxy_url: String,
  video: String,
  pdf_attachment_url: String,
  post_date: String,
  display_date: String,
  suitability_score: String,
  video_id: String,
  display_tag: String,
  display_summary: String,
  vestorly_url: String,
  title: String
)
