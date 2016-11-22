<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\AsacLabel
 *
 * @property integer $id
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\AsacLabel whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\AsacLabel whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\AsacLabel whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\AsacLabel whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\AsacLabel whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\AsacLabel whereUpdatedAt($value)
 */
	class AsacLabel extends \Eloquent {}
}

namespace App{
/**
 * App\Membership
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $licence
 * @property integer $asac_id
 * @property \Carbon\Carbon $date
 * @property integer $origin_id
 * @property boolean $magazine
 * @property boolean $tank
 * @property boolean $regulator
 * @property boolean $supervisor
 * @property boolean $pool_lannion
 * @property boolean $free_pool
 * @property boolean $pool_trestel
 * @property boolean $local_access
 * @property integer $insurance_id
 * @property string $certificat
 * @property \Carbon\Carbon $certificat_date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\User $user
 * @property-read \App\MembershipOrigin $origin
 * @property-read \App\InsuranceLabel $insurance
 * @property-read \App\AsacLabel $asac
 * @method static \Illuminate\Database\Query\Builder|\App\Membership whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Membership whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Membership whereLicence($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Membership whereAsacId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Membership whereDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Membership whereOriginId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Membership whereMagazine($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Membership whereTank($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Membership whereRegulator($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Membership whereSupervisor($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Membership wherePoolLannion($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Membership whereFreePool($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Membership wherePoolTrestel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Membership whereLocalAccess($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Membership whereInsuranceId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Membership whereCertificat($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Membership whereCertificatDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Membership whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Membership whereUpdatedAt($value)
 */
	class Membership extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property integer $id
 * @property string $slug
 * @property string $name
 * @property string $first_name
 * @property string $email
 * @property string $street
 * @property string $city
 * @property string $zip_code
 * @property string $phone_number
 * @property string $mobile_phone
 * @property string $pro_phone
 * @property string $birthday
 * @property string $birth_city
 * @property string $birth_country
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Article[] $articles
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\BoatLevel[] $boat
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Event[] $booking
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\DiveLevel[] $dive
 * @property-read \App\Membership $membership
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Event[] $organizer
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Subscription[] $subscriptions
 * @property-read \App\TivLevel $tiv
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Group[] $groups
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $readNotifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $unreadNotifications
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereStreet($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereZipCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereMobilePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereProPhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereBirthday($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereBirthCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereBirthCountry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\SubscriptionStatus
 *
 * @property integer $id
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\SubscriptionStatus whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SubscriptionStatus whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SubscriptionStatus whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SubscriptionStatus whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SubscriptionStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SubscriptionStatus whereUpdatedAt($value)
 */
	class SubscriptionStatus extends \Eloquent {}
}

namespace App{
/**
 * App\BoatLevel
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $level
 * @property string $licence
 * @property string $instructor
 * @property string $origin
 * @property string $origin_number
 * @property string $date
 * @property boolean $vhf_licence
 * @property string $vhf_licence_number
 * @property string $vhf_date
 * @property boolean $archive
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\User $user
 * @property-read \App\BoatLabel $label
 * @method static \Illuminate\Database\Query\Builder|\App\BoatLevel whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BoatLevel whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BoatLevel whereLevel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BoatLevel whereLicence($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BoatLevel whereInstructor($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BoatLevel whereOrigin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BoatLevel whereOriginNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BoatLevel whereDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BoatLevel whereVhfLicence($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BoatLevel whereVhfLicenceNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BoatLevel whereVhfDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BoatLevel whereArchive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BoatLevel whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BoatLevel whereUpdatedAt($value)
 */
	class BoatLevel extends \Eloquent {}
}

namespace App{
/**
 * App\Group
 *
 * @property integer $id
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @method static \Illuminate\Database\Query\Builder|\App\Group whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Group whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Group whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Group whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Group whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Group whereUpdatedAt($value)
 */
	class Group extends \Eloquent {}
}

namespace App{
/**
 * App\TivLevel
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $licence
 * @property string $date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\TivLevel whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\TivLevel whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\TivLevel whereLicence($value)
 * @method static \Illuminate\Database\Query\Builder|\App\TivLevel whereDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\TivLevel whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\TivLevel whereUpdatedAt($value)
 */
	class TivLevel extends \Eloquent {}
}

namespace App{
/**
 * App\Comment
 *
 * @property integer $id
 * @property string $body
 * @property integer $article_id
 * @property integer $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\User $user
 * @property-read \App\Article $article
 * @method static \Illuminate\Database\Query\Builder|\App\Comment whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Comment whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Comment whereArticleId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Comment whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Comment whereUpdatedAt($value)
 */
	class Comment extends \Eloquent {}
}

namespace App{
/**
 * App\InvoiceStatus
 *
 * @property integer $id
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\InvoiceStatus whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\InvoiceStatus whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\InvoiceStatus whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\InvoiceStatus whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\InvoiceStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\InvoiceStatus whereUpdatedAt($value)
 */
	class InvoiceStatus extends \Eloquent {}
}

namespace App{
/**
 * App\DiveLabel
 *
 * @property integer $id
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\DiveLabel whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DiveLabel whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DiveLabel whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DiveLabel whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DiveLabel whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DiveLabel whereUpdatedAt($value)
 */
	class DiveLabel extends \Eloquent {}
}

namespace App{
/**
 * App\Role
 *
 * @property integer $id
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App{
/**
 * App\InsuranceLabel
 *
 * @property integer $id
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\InsuranceLabel whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\InsuranceLabel whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\InsuranceLabel whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\InsuranceLabel whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\InsuranceLabel whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\InsuranceLabel whereUpdatedAt($value)
 */
	class InsuranceLabel extends \Eloquent {}
}

namespace App{
/**
 * App\Product
 *
 * @property integer $id
 * @property integer $parent_product
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property float $price
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $children
 * @property-read \App\Product $parent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Subscription[] $subscriptions
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereParentProduct($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereUpdatedAt($value)
 */
	class Product extends \Eloquent {}
}

namespace App{
/**
 * App\BoatLabel
 *
 * @property integer $id
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\BoatLabel whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BoatLabel whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BoatLabel whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BoatLabel whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BoatLabel whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BoatLabel whereUpdatedAt($value)
 */
	class BoatLabel extends \Eloquent {}
}

namespace App{
/**
 * App\MembershipOrigin
 *
 * @property integer $id
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\MembershipOrigin whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\MembershipOrigin whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\MembershipOrigin whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\MembershipOrigin whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\MembershipOrigin whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\MembershipOrigin whereUpdatedAt($value)
 */
	class MembershipOrigin extends \Eloquent {}
}

namespace App{
/**
 * App\Subscription
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $status_id
 * @property integer $origin_id
 * @property \Carbon\Carbon $expiration_date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\SubscriptionStatus $status
 * @property-read \App\User $user
 * @property-read \App\MembershipOrigin $origin
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @property-read \App\Invoice $invoice
 * @method static \Illuminate\Database\Query\Builder|\App\Subscription whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Subscription whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Subscription whereStatusId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Subscription whereOriginId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Subscription whereExpirationDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Subscription whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Subscription whereUpdatedAt($value)
 */
	class Subscription extends \Eloquent {}
}

namespace App{
/**
 * App\DiveLevel
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $level
 * @property string $licence
 * @property string $instructor
 * @property string $origin
 * @property string $origin_number
 * @property string $date
 * @property boolean $archive
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\User $user
 * @property-read \App\DiveLabel $label
 * @method static \Illuminate\Database\Query\Builder|\App\DiveLevel whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DiveLevel whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DiveLevel whereLevel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DiveLevel whereLicence($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DiveLevel whereInstructor($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DiveLevel whereOrigin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DiveLevel whereOriginNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DiveLevel whereDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DiveLevel whereArchive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DiveLevel whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DiveLevel whereUpdatedAt($value)
 */
	class DiveLevel extends \Eloquent {}
}

namespace App{
/**
 * App\Article
 *
 * @property integer $id
 * @property string $slug
 * @property string $title
 * @property string $body
 * @property string $status
 * @property integer $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comments
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereUpdatedAt($value)
 */
	class Article extends \Eloquent {}
}

namespace App{
/**
 * App\Invoice
 *
 * @property integer $id
 * @property string $invoice_number
 * @property integer $subscription_id
 * @property integer $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\InvoiceStatus $invoice_status
 * @property-read \App\Subscription $subscription
 * @method static \Illuminate\Database\Query\Builder|\App\Invoice whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Invoice whereInvoiceNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Invoice whereSubscriptionId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Invoice whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Invoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Invoice whereUpdatedAt($value)
 */
	class Invoice extends \Eloquent {}
}

